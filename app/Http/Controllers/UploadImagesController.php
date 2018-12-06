<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductImage;

class UploadImagesController extends Controller
{
	public function imageStore(Request $request)
    {
        $image = $request->file('file');
        dd($image);
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        
        $imageUpload = new ProductImage();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }
    public function imageDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        ProductImage::where('filename',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }
}
