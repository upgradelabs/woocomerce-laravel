<?php

namespace Upgradelabs\WooCommerce\Models;

use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class Tag extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'products/tags';
}
