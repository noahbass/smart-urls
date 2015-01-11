<?php namespace Noahbass\SmartUrls;

use Illuminate\Support\Facades\Form;

class SForm {

	/**
	 * Default parameters.
	 * @var str $params
	 */
	protected $params = array('url' => '/');


	/**
	 * Update action url to be protocal-relative.
	 * @var array $params
	 *
	 * @return str
	 */
	public static function open($params)
	{
		return str_replace('http:', null, Form::open($params));
	}


	/**
	 * Update action url in model form to be protocal-relative.
	 * @var str $model
	 * @var array $params
	 *
	 * @return str
	 */
	public static function model($model, $params)
	{
		return str_replace('http:', null, Form::model($model, $params));
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
