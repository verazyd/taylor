<?php

class Location extends \Eloquent {
	protected $fillable = [];

    public static function validate($input)
    {
        $rules = [
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required'
        ];
        return Validator::make($input, $rules);
    }
}