<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    protected $table = "attribute";
    protected $fillable = ['id','size','color','price','amount','price_sale','product_id'];
    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
}
