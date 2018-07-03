<?php

 namespace Contal\Trakt;

 use Illuminate\Support\Facades\Facade;

 class Trakt extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() {
	 return 'client';
	}
 }