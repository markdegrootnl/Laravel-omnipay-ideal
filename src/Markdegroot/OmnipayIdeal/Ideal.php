<?php namespace Markdegroot\OmnipayIdeal;

use Illuminate\Support\Facades\Facade;

class Ideal extends Facade {

    /**
     * Get the registered component.
     *
     * @return object
     */
    protected static function getFacadeAccessor() { return 'Omnipay\Ideal\Gateway'; }

}