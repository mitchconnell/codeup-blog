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

	public function assignImage($inputFile)
	{			
		$imagePath = base_path() . '/public/images/';
		$extension = $inputFile('image')->getClientOriginalExtension();
		$imageName = uniqid() . '.' . $extension;
		$fullPathToImage = $imagePath . $imageName;
		$inputFile->move($imagePath, $fullPathToImage);
		$post->image = '/image/' . $imageName;			
			
	}
}





