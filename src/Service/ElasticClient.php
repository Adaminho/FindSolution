<?php
/**
 * Created by PhpStorm.
 * User: amaliszewski
 * Date: 02/06/2018
 * Time: 11:53
 */

namespace App\Service;

class ElasticClient
{
    const ALLOWED_API_METHODS = [
        'GET',
        'PUT',
        'POST',
        'UPDATE',
        'DELETE'
    ];

    public function sendGet($query, $uri)
    {
        return $this->_send($query, $uri, 'GET');
    }

    public function sendPut($query, $uri)
    {
        return $this->_send($query, $uri, 'PUT');
    }

    public function sendPost($query, $uri)
    {
        return $this->_send($query, $uri, 'POST');
    }

    public function sendUpdate($query, $uri)
    {
        return $this->_send($query, $uri, 'UPDATE');
    }

    public function sendDelete($query, $uri)
    {
        return $this->_send($query, $uri, 'DELETE');
    }

    protected function _send($query, $uri, $method)
    {
        $response = '';
        return $response;
    }
}