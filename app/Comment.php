<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     public function user($value='')
    {
    	return $this->hasMany('App\User');
    }
    public function movies($value='')
    {
    	return $this->hasMany('App\Movie');
    }
}
