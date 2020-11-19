<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_status extends Model
{
    //
    protected $table = "order_status";
    protected $fillable = ['id','name','order_id'];
    public function order(){
        return $this->belongsTo('App\Order','order_id','id');
    }
}
