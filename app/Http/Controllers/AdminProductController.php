<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Product;
use App\Category;
use App\Attribute;
use App\ProductAttribute;
use App\ProductCategory;
use App\ProductImage;
use \Illuminate\Support\Str;

class AdminProductController extends Controller
{
    public function index()
    {
    	return view('admin.products.index');
    }

    public function getListProducts()
    {
    	return datatables::of(Product::query())
     ->addcolumn('action', function ($product) {
        return '<button data-url="'.route('products.show',$product->id).'"​ type="button" class="btn btn-xs btn-dark btn-show" data-toggle="modal" data-target="#modal-show">Detail</button>
        <button data-url="'.route('products.edit',$product->id).'"​ data-id="'.$product->id.'" type="button" class="btn btn-xs btn-dark btn-edit">Edit</button>
        <button data-url=""​ type="button" class="btn btn-xs btn-dark btn-delete">Delete</button>
        <button data-url=""​ style="margin-top: 5px" type="button" class="btn btn-xs btn-dark btn-add-image">Image</button>
        <button data-url=""​ style="margin-top: 5px" type="button" class="btn btn-xs btn-dark btn-add-attribute">Attribute</button>';
    })
     ->editColumn('description', function (Product $product) {
        return Str::words($product->description,15,'...');
    })
     ->make(true);
 }

 public function show($id)
 {
   $product = Product::with('images')->where('id',$id)->FirstOrFail();
   return response()->json(['product'=>$product],200);
}

public function edit($id)
{
    $product = Product::with(['images','categories'])->where('id',$id)->FirstOrFail();
    $categories = Category::get();
    $attributes = Attribute::get();
    $product_attributes  = \DB::table('product_attributes')
    ->join('attributes','product_attributes.attribute_id','=','attributes.id')
    ->join('products','product_attributes.product_id','=','products.id')
    ->where('products.id', '=', $id)
    ->get();

    return response()->json([
        'product'=>$product,
        'product_attributes'=>$product_attributes,
        'categories'=>$categories,
        'attributes'=>$attributes
    ],200);
}

public function deleteImage()
{
    $id = request()->id;
        // $image = ProductImage::find($id)->delete();
    return response()->json(['data'=>'removed'],200);
}

public function update(Request $request,$id)
{
    $name = $request->name;
    $cost = $request->cost;
    $price= $request->price;
    $pricesale = $request->pricesale;
    $quantity = $request->quantity;
    $description = $request->description;
    $weight = $request->weight;
    $color  = $request->color;
    $material  = $request->material;
    $origin  = $request->origin;
    $category = $request->category;
    //update thông tin sản phẩm
    $product = Product::where('id',$id)->update([
        'name' => $name,
        'cost' => $cost,
        'price' => $price,
        'price_sale' => $pricesale,
        'quantity' => $quantity,
        'description' => $description
    ]);
    //update thuộc tính sản phẩm
    $attribute = ProductAttribute::where([
        ['product_id','=',$id],
        ['attribute_id','=',$weight['id']],
    ])->update(['value'=>$weight['value']]);
    $attribute = ProductAttribute::where([
        ['product_id','=',$id],
        ['attribute_id','=',$color['id']],
    ])->update(['value'=>$color['value']]);
    $attribute = ProductAttribute::where([
        ['product_id','=',$id],
        ['attribute_id','=',$material['id']],
    ])->update(['value'=>$material['value']]);
    $attribute = ProductAttribute::where([
        ['product_id','=',$id],
        ['attribute_id','=',$origin['id']],
    ])->update(['value'=>$origin['value']]);
    //update category của sản phẩm
    $category = ProductCategory::where('product_id',$id)->update(['category_id' => $category]);

    return response()->json(['status'=>'thanh cong'],200);
}

public function upload(Request $request)
{
   $image = $request->file('file');
   dd($image);
}
}
