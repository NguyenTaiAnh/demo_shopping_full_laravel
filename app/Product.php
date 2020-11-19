<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "product";
    protected $fillable = ['id','name','description','category_id','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function image(){
        return $this->hasMany(Image::class,'product_id','id');
    }
    public function review(){
        return $this->hasMany('App\Review','product_id','id');
    }
    public function category(){
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function attribute(){
        return $this->hasMany('App\Attribute','product_id','id');
    }
    public static function boot() {
        parent::boot();

        static::deleting(function($product) { // before delete() method call this
            $product->image()->delete();
            $product->review()->delete();
            $product->attribute()->delete();
            // do the rest of the cleanup...
        });
    }

}
