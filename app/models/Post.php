<?php

class Post extends BaseModel {

    protected $table = 'posts';

}


public static $rules = array(
	'title'     => 'required|max:100',
	'body'      => 'required|max:10000'


	);

public function setPasswordAttribute($value)
{
    $this->attributes['password'] = Hash::make($value);
} 