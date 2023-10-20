<?php

namespace Upgradelabs\WooCommerce\Models;

use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class TaxClass extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'taxes/classes';
}
