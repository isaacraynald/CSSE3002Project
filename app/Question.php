<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Question extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'questions';

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['question'];
        

    public function users(){
        return $this->belongsTo('App\User');
    }
}
