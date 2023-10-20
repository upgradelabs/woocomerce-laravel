<?php

namespace Upgradelabs\WooCommerce\Models;

use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class Review extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'products/reviews';
}
