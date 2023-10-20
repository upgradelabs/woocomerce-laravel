<?php

namespace Upgradelabs\WooCommerce\Models;

use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class PaymentGateway extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'payment_gateways';
}
