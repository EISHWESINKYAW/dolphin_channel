<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $fillable = [
        'title','photo', 'link', 'star', 'good_point', 'quality', 'size', 'review','release_year','run_time','release_country','rating'
    ];
    public function actors($value='')
    {
    	return $this->belongsToMany('App\Actor','movie_actor')
                ->withTimestamps();
    }
    public function genres($value='')
    {
    	return $this->belongsToMany('App\Genre','movie_genre')
                ->withTimestamps();
    }
    public function director($value='')
    {
    	return $this->hasMany('App\Director','movie_director')
                ->withTimestamps();
    }
}
