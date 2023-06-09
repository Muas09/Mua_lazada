<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function type_products()
    {
        return $this->belongTo('App\type_product');
    }

    public function bills_details()
    {
        return $this->hasMany('App\bill_detail');
    }

    public function comment()
    {
        return $this->belongTo('App\Product');
    }
}
