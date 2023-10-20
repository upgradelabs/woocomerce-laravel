<?php

namespace Upgradelabs\WooCommerce\Facades;

use Upgradelabs\WooCommerce\WooCommerceAnalyticsApi;
use Illuminate\Support\Facades\Facade;

class WooAnalytics extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return WooCommerceAnalyticsApi::class;
    }
}
