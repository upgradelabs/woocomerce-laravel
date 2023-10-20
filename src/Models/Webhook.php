<?php

namespace Upgradelabs\WooCommerce\Models;

use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class Webhook extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'webhooks';
}
