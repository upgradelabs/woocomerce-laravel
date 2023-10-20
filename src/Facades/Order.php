<?php

namespace Upgradelabs\WooCommerce\Facades;

use Illuminate\Support\Facades\Facade;

class Order extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Upgradelabs\WooCommerce\Models\Order';
    }
}
