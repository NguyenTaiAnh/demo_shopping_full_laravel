<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "category";
    protected $fillable = ['id','name','image'];
    public function product(){
        return $this->hasMany('App\Product','category_id','id');
    }
}
