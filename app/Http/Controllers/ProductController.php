<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use App\User;
use App\Bill;
use App\BillDetail;
use App\Attribute;
use App\ProductAttribute;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductController extends Controller
{
	public function index()
	{
		$products = Product::with(['images','sizes'])->orderBy('id','desc')->get();
		return view('shop.index',['products' => $products]);
	}

	public function detail($id)
	{
		$product = Product::where('id',$id)->FirstOrFail();

		\Event::fire('products.view', $product);//đếm view

		$attributes = Attribute::get();
		$product_attributes  = \DB::table('product_attributes')
        ->join('attributes','product_attributes.attribute_id','=','attributes.id')
        ->join('products','product_attributes.product_id','=','products.id')
        ->where('products.id', '=', $id)
        ->get();

		return view('shop.detail',[
			'product' => $product,
			'product_attributes'=>$product_attributes,
			'attributes'=>$attributes,
		]);
	}

	public function quickView()
	{
		$id = request()->id;
		$product = Product::with('images')->where('id',$id)->FirstOrFail();
		return response()->json(['product'=>$product],200);
	}

	public function add2cart(Request $request)
	{
		$id = request()->id;
		$size = request()->size;

		$product = Product::where('id',$id)->FirstOrFail();

		Cart::add($product->id,$product->name,1,$product->price_sale,['thumbnail'=>$product->images()->first()->link, 'size' => $size,'price'=>$product->price]);

		// dd(Cart::content());

		return response()->json([
			'data' => Cart::content(),
			'count' => Cart::count(),
			'total' => Cart::total(),
			'subtotal' => Cart::subtotal(),
			'taxes' => Cart::tax(),
			'id' => $id,
		]);
		//return view('shop.cart');
	}

	public function cart()
	{
		return view('shop.cart');
	}

	public function add()
	{
		$rowId = request()->rowId;
		$addOrMinus = request()->status;
		$product = Cart::get($rowId);
		$number = $product->qty;
		$status = 0;
		if ($number+$addOrMinus==0) {
			Cart::remove($rowId);
			$status = 1;
		}
		if ($number+$addOrMinus>0) {
			Cart::update($rowId,$number+$addOrMinus);
		}
		return response()->json([
			'data' => Cart::content(),
			'total' => Cart::total(),
			'count' => Cart::count(),
			'subtotal' => Cart::subtotal(),
			'tax' => Cart::tax(),
			'detail' => Cart::get($rowId),
			'status' => $status,
		]);
	}

	public function checkout()
	{
		return view('shop.checkout');
	}

	public function billing(Request $request)
	{
		$name = $request->name;
		$email = $request->email;
		$address = $request->address;
		$phonenum = $request->phonenum;

		$customer = new User();
		$customer->name = $name;
		$customer->email = $email;
		$customer->address = $address;
		$customer->sdt = $phonenum;
		$customer->password = md5('123456789');
		$customer->created_at = date("Y-m-d H:i:s");
		$customer->updated_at = date("Y-m-d H:i:s");
		$customer->save();

		$bill = new Bill();
		$bill->code_bill = $customer->id.'_'.'online'.'_'.time();
		$bill->code_employee = 1;
		$bill->code_customer = $customer->id;
		$bill->total = Cart::total();
		$bill->status = 1;
		$bill->created_at = date("Y-m-d H:i:s");
		$bill->updated_at = date("Y-m-d H:i:s");
		$bill->save();

		$bill_detail = new BillDetail();
		foreach (Cart::content() as $cart) {
			$bill_detail->code_bill = $customer->id.'_'.'online'.'_'.time();
			$bill_detail->code_product = $cart->rowId;
			$bill_detail->quantity = $cart->qty;
			$bill_detail->subtotal = $cart->subtotal;
			$bill_detail->created_at = $bill->created_at;
			$bill_detail->updated_at = $bill->updated_at;
		}
		$bill_detail->save();
		Cart::destroy();

		Mail::to($customer->email)->send(new \App\Mail\Mail('Đặt hàng thành công'));
		return response()->json(['status' => 'thành công']);
	}

	public function deleteProduct($rowId)
	{
		Cart::remove($rowId);
		return response()->json([
			'status'=>'thành công',
			'rowId'=>$rowId,
			'total' => Cart::total(),
			'count' => Cart::count(),
			'subtotal' => Cart::subtotal(),
			'tax' => Cart::tax(),
		]);
	}

























}
