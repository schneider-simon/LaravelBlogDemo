<?php

class Comment extends \Eloquent {
	protected $fillable = ['email', 'title', 'content'];

    public function post()
    {
        return $this->belongsTo('Post');
    }
}