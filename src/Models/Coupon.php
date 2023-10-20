<?php

namespace Upgradelabs\WooCommerce\Models;

use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class Coupon extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'coupons';
}
