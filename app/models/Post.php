<?php

use Carbon\Carbon;

class Post extends BaseModel {

    protected $table = 'posts';

    public function user()
    {
    	return $this->belongsTo('User');
    }

	public static $rules = array(
		'title'     => 'required|max:100',
		'body'      => 'required|max:10000'
	);

	public function getCreatedAttribute($value)
	{	    
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago'); 
	}
}