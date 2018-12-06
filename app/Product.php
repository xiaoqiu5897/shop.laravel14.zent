<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','name','cost','price','description','price_sale','category_id','product_id'];

    public function images()
    {
    	return $this->hasMany('\App\ProductImage');
    }

    public function sizes()
    {
    	return $this->hasMany('\App\Size');
    }

    public function categories()
    {
        return $this->belongsToMany('\App\Category','product_categories','product_id','category_id');
    }
}
