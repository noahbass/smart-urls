<?php namespace Noahbass\SmartUrls;

use Illuminate\Support\Facades\URL;

class SUrl {

	/**
	 * Update url to be protocal-relative.
	 * @var str $method
	 * @var array $attributes
	 *
	 * @return str
	 */
	public static function __callStatic($method, $attributes = array('/'))
	{
		return str_replace('http:', null, URL::$method($attributes[0]));
	}

}
