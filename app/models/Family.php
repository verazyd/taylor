<?php

class Family extends \Eloquent {
    protected $fillable = ['name', 'description'];

    protected  $table = "families";

    public static function validate($input)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required'
        ];
        return Validator::make($input, $rules);
    }
}