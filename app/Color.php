<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{

    protected $fillable = ['name'];


    public function products(){
    	return $this->belongsToMany('App\Product')->withPivot('quantity')->withTimestamps();
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }



}
