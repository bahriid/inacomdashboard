<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleProduct extends Model
{
    
    protected $table = 'sale_product';

    public $incrementing = false;


    public function sale(){
        return $this->belongsTo( Sale::class, 'sale_id');
    }

    public function product(){
        return $this->belongsTo( Product::class, 'product_id', 'id' );
    }
}
