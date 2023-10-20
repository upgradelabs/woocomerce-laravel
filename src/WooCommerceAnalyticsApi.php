<?php

namespace Upgradelabs\WooCommerce;

use Automattic\WooCommerce\Client;
use Upgradelabs\WooCommerce\Traits\WooCommerceTrait;


class WooCommerceAnalyticsApi {

    use WooCommerceTrait;

    /**
     *@var \Automattic\WooCommerce\Client
     */
    protected $client;

    /**
     *@var array
     */
    protected $headers = [];

    /**
     * Build Woocommerce connection.
     *
     * @return void
     */
    public function __construct(string $site)
    {
        //$site = session()->has('woo_site') ? session('woo_site') : die('WOO Site is missing');

        try {
            $this->headers = [
                'header_total'       => config('woocommerce.header_total') ?? 'X-WP-Total',
                'header_total_pages' => config('woocommerce.header_total_pages') ?? 'X-WP-TotalPages',
            ];

            $this->client = new Client(
                config("woocommerce.$site.store_url"),
                config("woocommerce.$site.consumer_key"),
                config("woocommerce.$site.consumer_secret"),
                [
                    'version'           => 'wc-analytics',
                    'wp_api'            => config('woocommerce.wp_api_integration'),
                    'verify_ssl'        => config('woocommerce.verify_ssl'),
                    'query_string_auth' => config('woocommerce.query_string_auth'),
                    'timeout'           => config('woocommerce.timeout'),
                ]
            );
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 1);
        }
    }
    /**
     * GET method.
     * Retrieve data.

     * @param string $endpoint API endpoint.
     * @param array  $options
     *
     * @return array
     */
    public function all($endpoint = '', $options = [])
    {
        try {
            return $this->client->get($endpoint, $options);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 1);
        }
    }

    /**
     * GET method.
     * Retrieve Single data.
     *
     * @param string $endpoint API endpoint.
     * @param array  $options
     *
     * @return array
     */
    public function find($endpoint = '', $options = [])
    {
        try {


            return $this->client->get($endpoint, $options);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 1);
        }
    }

    /**
     * POST method.
     * Insert data.
     *
     * @param string $endpoint API endpoint.
     * @param array  $data
     *
     * @return array
     */
    public function create($endpoint, $data)
    {
        try {


            return $this->client->post($endpoint, $data);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 1);
        }
    }

    /**
     * PUT method.
     * Update data.
     *
     * @param string $endpoint API endpoint.
     * @param array  $data
     *
     * @return array
     */
    public function update($endpoint, $data)
    {
        try {

            return $this->client->put($endpoint, $data);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 1);
        }
    }

    /**
     * DELETE method.
     * Remove data.
     *
     * @param string $endpoint API endpoint.
     * @param array  $options
     *
     * @return array
     */
    public function delete($endpoint, $options = [])
    {
        try {
            return $this->client->delete($endpoint, $options);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 1);
        }
    }
}
