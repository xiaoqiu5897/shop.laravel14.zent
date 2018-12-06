<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Bill;
use App\BillDetail;
use Gloudemans\Shoppingcart\Facades\Cart;

class AdminSaleController extends Controller
{
	public function index()
	{
		return view('admin.sales.index');
	}

	public function getListCustomers()
	{
		return datatables::of(User::query())
		->addcolumn('action', function ($user) {
			return '<a href="'.route('selling',['id'=>$user->id]).'"​ class="btn btn-xs btn-dark" style="background-color: #b50000!important; border: none">Tạo hóa đơn</a>';
		}) ->make(true);
	}

	public function selling($id)
	{
		$customer = User::where('id',$id)->firstOrFail();
		return view('admin.sales.sale')->with('customer',$customer);
	}

	public function getListSaleProducts()
	{
		return datatables::of(Product::query())
		->addcolumn('action', function ($product) {
			return '<a href="'.route('add2cart',['id'=>$product->id]).'" style="background-color: #b50000!important; border: none;" class="btn btn-info  add2cart"><i class="fa fa-cart-plus"></i></a>';
		}) ->make(true);
	}

	public function add2cart($id)
	{
		$product = Product::where('id',$id)->FirstOrFail();
		Cart::add($product->id,$product->name,1,$product->price,['price_sale'=>$product->price_sale]);
		return redirect()->back();
	}

	public function addOrMinus($id)
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
		return Cart::get($rowId);
	}

	public function payment($id)
	{
		$customer = User::where('id',$id)->FirstOrFail();
		$bill = new Bill();
		$bill->code_bill = $customer->id.'_'.'offline'.'_'.time();
		$bill->code_employee = "NV01";
		$bill->code_customer = $customer->id;
		$bill->total = Cart::total();
		$bill->tax = Cart::tax();
		$bill->created_at = date("Y-m-d H:i:s");
		$bill->updated_at = date("Y-m-d H:i:s");
		$bill->status = 1;
		$bill->save();

		foreach (Cart::content() as $cart) {
			$bill_detail = new BillDetail();
			$bill_detail->code_bill = $bill->code_bill;
			$bill_detail->code_product = $cart->id;
			$product = Product::where('id',$bill_detail->code_product)->FirstOrFail();
			$bill_detail->quantity = $cart->qty;
			$number = $product->quantity - $bill_detail->quantity;
			$product->quantity = $number;
			$product->save();
			$bill_detail->subtotal = $cart->subtotal;
			$bill_detail->created_at = date("Y-m-d H:i:s");
			$bill_detail->updated_at = date("Y-m-d H:i:s");
			$bill_detail->save();
		}
		Cart::destroy();
		return redirect()->route('billdetail',['id'=>$id,'code_bill'=>$bill->code_bill]);
	}

	public function billDetai($id,$code_bill)
	{
		$customer = User::where('id',$id)->FirstOrFail();
		$bill = Bill::where('code_bill',$code_bill)->FirstOrFail();
		$bill_details = BillDetail::where('code_bill',$code_bill)->get();
		$products = Product::get();
		return view('admin.sales.bill',['bill'=>$bill,'bill_details'=>$bill_details,'products'=>$products,'customer'=>$customer]);
	}

	public function destroy($id)
	{
		Cart::destroy();
		return redirect()->back();
	}
}
