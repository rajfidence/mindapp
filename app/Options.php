<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $fillable = ['question_id','option_name'];

    public function questions()
    {
        return $this->belongsTo('App\Questions','question_id');
    }

}
