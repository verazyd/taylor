<?php

class Video extends \Eloquent {
    protected $fillable = ['title', 'url'];

    public static function validate($input)
    {
        $rules = [
            'title' => 'required',
            'url'  => 'required'
        ];
        return Validator::make($input, $rules);
    }
}