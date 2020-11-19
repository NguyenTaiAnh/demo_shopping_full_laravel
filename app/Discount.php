<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //
    protected $table = "discount";
    protected $fillable =['id','code','percent','time_start','time_end'];
    public function order(){
        return $this->hasOne('App\Order','discount_id','id');
    }
}
