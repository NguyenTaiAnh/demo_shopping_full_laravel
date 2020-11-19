<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //

    protected $table = "address";
    protected $fillable = ['id','province','district','ward','village','address','phone','user_id','order_id'];
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function order(){
        return $this->hasOne('App\Order','order_id','id');
    }
}
