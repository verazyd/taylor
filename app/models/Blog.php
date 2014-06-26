<?php

class Blog extends \Eloquent {
	protected $fillable = ['topic', 'description'];

    public function tags()
    {
        return $this->belongsTo('Tag', 'tag_id');
    }

    public static function validate($input)
    {
         $rules = [
        'topic' => 'required',
        'description' => 'required'
    ];
        return Validator::make($input, $rules);
    }
}