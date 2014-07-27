<?php

class Post extends \Eloquent {
	protected $fillable = ['title', 'url', 'description'];

    protected $table = "postimages";

    public static function validate($input)
    {
        $rules = [
            'title' => 'required',
            'url'  => 'required',
            'description' => 'required'
        ];
        return Validator::make($input, $rules);
    }
}