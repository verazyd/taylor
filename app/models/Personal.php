<?php

class Personal extends \Eloquent {
	protected $fillable = ['name', 'description'];

    protected  $table = "personals";

    public static function validate($input)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required'
        ];
        return Validator::make($input, $rules);
    }
}