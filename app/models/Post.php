<?php

class Post extends \Eloquent {
	protected $fillable = ['title', 'url'];
    protected $table = "postimages";
}