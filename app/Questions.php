<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    
	public function options(){
		return $this->hasMany('App\Options','question_id');
    }
    
   
}
