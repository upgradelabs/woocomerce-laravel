<?php

namespace Upgradelabs\Woocommerce\Facades;

use Illuminate\Support\Facades\Facade;

class WoocommerceFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Upgradelabs\Woocommerce\WooCommerceApi';
    }
}
