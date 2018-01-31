<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $fillable = ['user_id', 'question_id', 'option_id','quiz_id'];
    
    

    public function question()
    {
        return $this->belongsTo('App\Questions','question_id');
    }

    public function option()
    {
        return $this->belongsTo('App\Options','option_id');
    }

    

}
