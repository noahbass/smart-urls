<?php namespace Noahbass\SmartUrls;

use Illuminate\Support\Facades\Form;

class SForm {

	/**
	 * Update action url to be protocal-relative..
	 * @var array $params
	 *
	 * @return str
	 */
	public static function open($params = array('url' => '/'))
	{
		return str_replace('http:', null, Form::open($params));
	}


	/**
	 * Non-relative-protocal Form methods.
	 * @var str $method
	 * @var array $params
	 *
	 * @return str
	 */
	public function __callStatic($method, $params = array())
	{
		return Form::$method($params);
	}

}
