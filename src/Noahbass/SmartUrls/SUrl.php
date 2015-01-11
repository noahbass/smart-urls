<?php namespace Noahbass\SmartUrls;

use Illuminate\Support\Facades\URL;

class SUrl {

	/**
	 * Update url to be protocal-relative.
	 * @var str $method
	 * @var array $params
	 *
	 * @return str
	 */
	public static function __callStatic($method, $params = array('/'))
	{
		return str_replace('http:', null, URL::$method($params[0]));
	}

}
