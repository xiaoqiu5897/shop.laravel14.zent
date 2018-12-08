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
        return '<button data-url="'.route('products.show',$product->id).'"​ type="button" class="btn btn-xs btn-dark btn-show" data-toggle="modal" style="margin-top: 5px; background: #a340ce; border:none" data-target="#modal-show"><i class="fa fa-eye"></i></button>
        <button data-url="'.route('products.edit',$product->id).'"​ style="margin-top: 5px; background: #ff45a6;border:none" data-id="'.$product->id.'" type="button" class="btn btn-xs btn-dark btn-edit"><i class="fa fa-pencil"></i></button>
        <button data-url="'.route('products.destroy',$product->id).'"​ type="button" style="margin-top: 5px; background: #ff9b00;border:none" class="btn btn-xs btn-dark btn-delete"><i class="fa fa-trash"></i></button>
        <a href="'.route('products.upload',$product->id).'"​ style="margin-top: 5px; border-radius:5px;background: #f8df21;border:none" class="btn btn-xs btn-dark btn-add-image"><i class="fa fa-image"></i></a>
        <button data-url=""​ style="margin-top: 5px; background: #34e1da;border:none" type="button" class="btn btn-xs btn-dark btn-add-attribute"><i class="fa fa-fort-awesome"></i></button>';})
     ->editColumn('description', function (Product $product) {
        return Str::words($product->description,15,'...');})
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
        $imageID = request()->imageID;
        $image = ProductImage::find($imageID)->delete();
        return response()->json(['data'=>'thành công','imageID'=>$imageID],200);
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


    public function create()
    {
        $categories = Category::get();
        $attributes = Attribute::get();
        return response()->json([
            'categories'=>$categories,
            'attributes'=>$attributes,
        ]);
    }

    public function store(Request $request)
    {
        $code = $request->code;
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
            //tạo mới sản phẩm
        $product = Product::create([
            'name' => $name,
            'cost' => $cost,
            'price' => $price,
            'price_sale' => $pricesale,
            'description' => $description,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        $product->code = $code;
        $product->quantity = $quantity;
        $product->save();
            //tạo mới thuộc tính sản phẩm
        $attribute = ProductAttribute::create([
            'product_id' => $product->id,
            'attribute_id' => $weight['id'],
            'value' => $weight['value'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        $attribute = ProductAttribute::create([
            'product_id' => $product->id,
            'attribute_id' => $color['id'],
            'value'=>$color['value'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        $attribute = ProductAttribute::create([
            'product_id' => $product->id,
            'attribute_id' => $material['id'],
            'value'=>$material['value'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        $attribute = ProductAttribute::create([
            'product_id' => $product->id,
            'attribute_id' => $origin['id'],
            'value'=>$origin['value'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
            //tạo mới category của sản phẩm
        $category = ProductCategory::create([
            'product_id' => $product->id,
            'category_id' => $category,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        return response()->json(['status'=>'thanh cong'],200);
    }

    public function uploadImage($id)
    {
        $images = ProductImage::where('product_id',$id)->get();
        return view('admin.products.upload',['id'=>$id,'images'=>$images]);
    }


    public function storeUpload(Request $request, $id)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();

        $image->move(public_path('assets/img/products'),$imageName);

        $imageUpload = ProductImage::create([
            'link' => $imageName,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        $imageUpload->product_id = $id;
        $imageUpload->save();

        dd($imageUpload);

        return response()->json(['imageName'=>$imageName],200);
    }

    public function imageDestroy($file) {
        $file1 = $file;
        dd($file1);
        ProductImage::delete($file1);
        return 'Yup it worked!';
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json(['status'=>'thành công']);
    }
































































}
