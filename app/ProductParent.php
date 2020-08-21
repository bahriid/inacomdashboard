<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductParent extends Model
{

    protected $table = 'product_parent';
    public $incrementing = false;

    
    public function product2(){
        return $this->hasOne( Product::class, 'parent_id', 'id' );
    }
}
