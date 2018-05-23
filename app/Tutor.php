<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    //table name
    protected $table = 'tutors';

    //primary key
    protected $primarykey = 'id';

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function answers(){
    	return $this->hasMany('App\Answer');
    }

    public function course(){
    	return $this->hasMany('App\Course');
    }
}
