<?php

class Victory extends \Eloquent {
	protected $fillable = ['topic', 'description'];

    public static function validate($input)
    {
        $rules = [
            'topic' => 'required',
            'description' => 'required'
        ];
        return Validator::make($input, $rules);
    }
}