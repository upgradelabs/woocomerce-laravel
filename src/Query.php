<?php

namespace Upgradelabs\WooCommerce;

use Upgradelabs\WooCommerce\Models\BaseModel;
use Upgradelabs\WooCommerce\Traits\QueryBuilderTrait;

class Query extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint;
    protected static $instance = null;

    public function __construct($endpoint = '')
    {
        $this->endpoint = $endpoint;
    }

    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    public function init()
    {
        if (!static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}
