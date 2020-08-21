<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sale';

    public $incrementing = false;


    public function sale_product(){
        return $this->hasOne( SaleProduct::class, 'sale_id');
    }
}
