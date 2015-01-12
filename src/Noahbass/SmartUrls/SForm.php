<?php namespace Noahbass\SmartUrls;

use Illuminate\Support\Facades\Form;

class SForm {

	/**
	 * Update action url to be protocal-relative.
	 * @var array $attributes
	 *
	 * @return str
	 */
	public static function open($attributes = array('url' => '/'))
	{
		return str_replace('http:', null, Form::open($attributes));
	}


	/**
	 * Close the form.
	 *
	 * @return str
	 */
	public static function close()
	{
		return '</form>';
	}


	/**
	 * Update action url in model form to be protocal-relative.
	 * @var str $model
	 * @var array $attributes
	 *
	 * @return str
	 */
	public static function model($model, $attributes = array('url' => '/'))
	{
		return str_replace('http:', null, Form::model($model, $attributes));
	}

}
