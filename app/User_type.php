<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    //
    protected $table = "user_type";
    protected $fillable = ['id','role'];
    public function user(){
        return $this->hasMany('App\User','role_id','id');
    }
}
