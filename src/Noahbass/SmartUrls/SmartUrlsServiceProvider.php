<?php namespace Noahbass\SmartUrls;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class SmartUrlsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}


	public function boot()
	{
		$this->package('noahbass/smart-urls');
	}


	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
