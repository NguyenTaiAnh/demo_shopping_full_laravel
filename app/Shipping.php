<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    //
    protected $table = "shipping";
    protected $fillable = ['id','name','cost'];
    public function order(){
        return $this->hasOne('App\Order','shipping_id','id');
    }
}
