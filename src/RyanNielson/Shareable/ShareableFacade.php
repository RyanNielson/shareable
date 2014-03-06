<?php namespace RyanNielson\Shareable;

use Illuminate\Support\Facades\Facade;

class ShareableFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'shareable'; }

}