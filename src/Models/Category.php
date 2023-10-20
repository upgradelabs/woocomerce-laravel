<?php

namespace Upgradelabs\WooCommerce\Models;

use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class Category extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'products/categories';
}
