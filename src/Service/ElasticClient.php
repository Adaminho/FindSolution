<?php
/**
 * Created by PhpStorm.
 * User: amaliszewski
 * Date: 02/06/2018
 * Time: 11:53
 */

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;

class ElasticClient
{
    private $elasticsearchAddress;
    private $elasticsearchPort;

    public function __construct($elasticsearchAddress, $elasticsearchPort)
    {
        $this->elasticsearchAddress = $elasticsearchAddress;
        $this->elasticsearchPort = $elasticsearchPort;
    }

    public function sendGet($query, $uri) : string
    {
        return $this->_send($query, $uri, 'GET');
    }

    public function sendPut($query, $uri) : string
    {
        return $this->_send($query, $uri, 'PUT');
    }

    public function sendPost($query, $uri) : string
    {
        return $this->_send($query, $uri, 'POST');
    }

    public function sendUpdate($query, $uri) : string
    {
        return $this->_send($query, $uri, 'UPDATE');
    }

    public function sendDelete($query, $uri) : string
    {
        return $this->_send($query, $uri, 'DELETE');
    }

    protected function _send($query, $uri, $method) : string
    {
        $uri = 'http://' . $this->elasticsearchAddress . ':' . $this->elasticsearchPort . '/' . $uri;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $uri);
        curl_setopt($curl,CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        if ($query) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($query));
        }

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }
}