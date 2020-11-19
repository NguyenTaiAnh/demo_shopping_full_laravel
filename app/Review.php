<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = "review";
    protected $fillable = ['id','start' ,'comment', 'product_id'];
    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
}
