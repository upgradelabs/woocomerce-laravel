<?php

namespace Upgradelabs\WooCommerce\Models;

use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class Tax extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'taxes';
}
