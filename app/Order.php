<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "order";
    protected $fillable = ['id','code','discount_id','total','user_id','address_id','paystatus','pay_type_id','shipping_id'];
    public function address(){
        return $this->hasOne('App\Address','address_id','id');
    }
    public function discount(){
        return $this->hasOne(Discount::class, 'discount_id');
    }
    public function item(){
        return $this->hasMany('App\Item');
    }
    public function order_status(){
        return $this->hasMany('App\Order_status','order_id','id');
    }
    public function pay_type(){
        return $this->hasOne('App\Pay_type','pay_type_id','id');
    }
    public function shipping(){
        return $this->hasOne('App\Shipping','shipping_id','id');
    }
}
