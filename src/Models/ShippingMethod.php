<?php

namespace Upgradelabs\WooCommerce\Models;

use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class ShippingMethod extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'shipping_methods';
}
