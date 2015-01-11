<?php

use Illuminate\Support\Facades\URL;
use Noahbass\SmartUrls\SUrl as SURL;

class UrlTest extends \Orchestra\Testbench\TestCase {

	public function testUrl()
	{
		// origin url: ex http://localhost
		$origin = URL::to('/');

		// origin replaced url: ex //localhost
		$origin_replaced = str_replace('http:', null, $origin);

		// dist url: ex //localhost
		$dist = SURL::to('/');

		// check if origin and dist are equal
		$this->assertEquals($origin_replaced, $dist);
	}

}
