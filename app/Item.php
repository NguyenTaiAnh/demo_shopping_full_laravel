<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = "item";
    protected $fillable = ['id','product_id','amount','price','price_sale'];
    public function order(){
        return $this->belongsTo('App\Order');
    }
}
