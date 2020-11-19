<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay_type extends Model
{
    //
    protected $table = "pay_type";
    protected $fillable = ['id','payment'];
    public function order(){
        return $this->hasOne('App\Order','pay_type_id','id');
    }
}
