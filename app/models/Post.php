<?php

class Post extends \Eloquent {
	protected $fillable = ['email', 'title', 'content'];

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function delete()
    {
        // delete all related comments
        $this->comments()->delete();

        // delete the post
        return parent::delete();
    }

}