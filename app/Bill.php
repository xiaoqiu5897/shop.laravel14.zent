<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['code_bill','code_customer','code_employee','total'];
}
