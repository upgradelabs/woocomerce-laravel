<?php

namespace Upgradelabs\WooCommerce\Traits;

trait WooCommerceTrait
{


    /**
     * Return the last request header.
     *
     * @return \Automattic\WooCommerce\HttpClient\Request
     */
    public function getRequest()
    {
        try {
            return $this->client->http->getRequest();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 1);
        }
    }

    /**
     * Return the http response headers from last request.
     *
     * @return \Automattic\WooCommerce\HttpClient\Response
     */
    public function getResponse()
    {
        try {
            return $this->client->http->getResponse();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 1);
        }
    }

    /**
     * Count the total results and return it.
     *
     * @return int
     */
    public function countResults()
    {
        return (int) $this->getResponse()->getHeaders()[$this->headers['header_total']];
    }

    /**
     * Count the total pages and return.
     *
     * @return mixed
     */
    public function countPages()
    {
        return (int) $this->getResponse()->getHeaders()[$this->headers['header_total_pages']];
    }

    /**
     * Return the current page number.
     *
     * @return int
     */
    public function current()
    {
        return !empty($this->getRequest()->getParameters()['page']) ? $this->getRequest()->getParameters()['page'] : 1;
    }

    /**
     * Return the previous page number.
     *
     * @return int|null
     */
    public function previous()
    {
        $currentPage = $this->current();

        return ($currentPage-- > 1) ? $currentPage : null;
    }

    /**
     * Return the next page number.
     *
     * @return int|null
     */
    public function next()
    {
        $currentPage = $this->current();

        return ($currentPage++ < $this->countPages()) ? $currentPage : null;
    }
}
