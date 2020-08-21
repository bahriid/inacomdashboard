<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public $incrementing = false;


    public function sale_product(){
        return $this->hasOne( SaleProduct::class, 'product_id', 'id' );
    }

    public function product_parent(){
        return $this->belongsTo( ProductParent::class, 'parent_id', 'id' );
    }
}
