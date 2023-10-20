<?php

namespace Upgradelabs\WooCommerce\Models;

use Upgradelabs\WooCommerce\Facades\Query;
use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class Customer extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'customers';

    /**
     * Download.
     *
     * @param int $id
     *
     * @return object
     */
    protected function downloads($id, $options = [])
    {
        return Query::init()
            ->setEndpoint("customers/{$id}/downloads")
            ->all($options);
    }
}
