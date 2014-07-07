<?php namespace RyanNielson\Shareable\Facades;

use Illuminate\Support\Facades\Facade;

class Shareable extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'shareable'; }
}
