<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $fillable = ['code_bill','code_product','quantity','subtotal'];
}
