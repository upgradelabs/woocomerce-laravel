<?php

namespace Upgradelabs\WooCommerce\Models;

use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class Product extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'products';
}
