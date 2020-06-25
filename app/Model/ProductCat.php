<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductCat extends Model
{
    protected $guarded = [];

    public function categories()
    {
    	$this -> belongsToMany(Product::class, 'product_product_cat', 'product_id', 'product_cat_id');
    }
}
