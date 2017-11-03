<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \App\User as UserEloquent;
use \App\Score as ScoreEloquent;

use DB;

class Student extends Model
{
    
    protected $table = 'student';


    public function user(){
    	return $this->belongsTo(UserEloquent::class);
    }

    public function score(){
    	return $this->hasOne(ScoreEloquent::class);
    }

}


