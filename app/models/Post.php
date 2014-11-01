<?php

class Post extends \Eloquent {
	protected $fillable = ['email', 'title', 'content'];

    public function comments()
    {
        return $this->hasMany('Comment');
    }

}