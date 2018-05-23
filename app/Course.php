<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //table name
    protected $table = 'courses';

    //primary key
    protected $primarykey = 'id';

    public function tutor(){
    	return $this->belongsTo('App\Tutor');
    }
}
