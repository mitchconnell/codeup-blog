<?php

class BaseMpdel extends Eloquent {

	public function getCreatedAtAttribute($value)
{
    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    return $utc->setTimezone('America/Chicago');
}

}