<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Product;
use App\User;
use App\Bill;

class AdminController extends Controller
{
    public function index()
    {
    	$qty_customers = User::count();
    	$products = Product::get();
    	$qty_products = 0;
    	foreach ($products as $row) {
    		$qty_products = $qty_products + $row->quantity;
    	}
    	$qty_orders = Bill::count();
    	$qty_employees = User::count();
    	return view('admin.dashboard',[
    		'qty_customers' => $qty_customers,
    		'qty_products' => $qty_products,
    		'qty_orders' => $qty_orders,
    		'qty_employees' => $qty_employees,
    	]);
    }
}
