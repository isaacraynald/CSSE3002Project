<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    //table name
    protected $table = 'tutors';

    //primary key
    protected $primarykey = 'id';

    public function questions(){
    	return $this->hasMany('App\Answer');
    }
}
