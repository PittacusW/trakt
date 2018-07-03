<?php

 namespace Contal\Trakt;

 use Illuminate\Support\ServiceProvider;

 class TraktServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = FALSE;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot() {
	 require base_path() . '/vendor/autoload.php';
	 $this->publishes([
		 dirpath(__DIR__) . '/config/trakt.php' => config_path('trakt.php'),
	 ]);
	}
 }