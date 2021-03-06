<?php namespace Qwildz\LocalizedEloquentDate;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class LocalizedEloquentDateServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		if(preg_match('/^4/',Application::VERSION))
		{
			$this->package('qwildz/localized-eloquent-date');
		}
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
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
