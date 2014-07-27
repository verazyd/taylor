<?php

class Testimonial extends \Eloquent {
    protected $fillable = ['name', 'email', 'location', 'description'];

    public static function validate($input)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'location' => 'required',
            'description' => 'required'
        ];
        return Validator::make($input, $rules);
    }
}