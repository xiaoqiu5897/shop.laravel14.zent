<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use App\User;
use App\Bill;
use App\BillDetail;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductController extends Controller
{
	public function index()
	{
		$products = Product::with(['images','sizes'])->orderBy('id','desc')->get();
		return view('shop.index',['products' => $products]);
	}

	public function detail($slug)
	{
		$product = Product::where('slug',$slug)->FirstOrFail();

		return view('shop.detail',['product' => $product]);
	}

	public function quickView()
	{
		$id = request()->id;
		$product = Product::with('images')->where('id',$id)->FirstOrFail();
		return response()->json(['product'=>$product],200);
	}

	public function add2cart(Request $request)
	{
		$slug = request()->slug;
		$size = request()->size;

		$product = Product::where('slug',$slug)->FirstOrFail();

		Cart::add($product->id,$product->name,1,$product->price,['thumbnail'=>$product->images()->first()->link, 'size' => $size,'price_sale'=>$product->price_sale]);

		return response()->json([
				'data' => Cart::content(),
				'total' => Cart::count(),
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
		if ($number+$addOrMinus==0) {
			Cart::remove($rowId);
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
				'detail' => Cart::get($rowId)
			]);
	}

	public function remove()
	{
		# code...
	}

	public function destroy()
	{
		# code...
	}

	public function checkout()
	{
		return view('shop.checkout');
	}

	public function billing(Request $request)
	{
		$name = request()->name;
		$email = request()->email;
		$address = request()->address;
		$phonenum = request()->phonenum;

		$customer = new User();
		$customer->name = $name;
		$customer->email = $email;
		$customer->address = $address;
		$customer->phone_number = $phonenum;
		$customer->save();

		$bill = new Bill();
		$bill->code_bill = $customer->id.'_'.'online'.'_'.time();
		$bill->code_employee = 1;
		$bill->code_customer = $customer->id;
		$bill->total = Cart::total();
		$bill->status = 1;
		$bill->save();

		$bill_detail = new BillDetail();
		foreach (Cart::content() as $cart) {
			$bill_detail->code_bill = $customer->id.'_'.'online'.'_'.time();
			$bill_detail->code_product = $cart->rowId;
			$bill_detail->quantity = $cart->qty;
			$bill_detail->subtotal = $cart->subtotal;
		}
		$bill_detail->save();
	}

























}
