<?php
/**
 * Created by PhpStorm.
 * User: amaliszewski
 * Date: 02/06/2018
 * Time: 12:35
 */

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ElasticClient;

class SolutionController
{
    /**
     * @Route("/api/solution/search/{query}")
     *
     * @param $query
     * @param ElasticClient $elasticClient
     * @return Response
     */
    public function search($query, ElasticClient $elasticClient)
    {
        $uri = 'solution/doc/_search';
        $query = [
            'query' => [
                'match' => [
                    'description' => $query
                ]
            ]
        ];

        $response = $elasticClient->sendGet($query, $uri);

        return new Response($response);
    }

    /**
     * @Route("/api/solution/add/")
     *
     * @param ElasticClient $elasticClient
     * @return Response
     */
    public function add(ElasticClient $elasticClient)
    {
        $date = new \DateTime();
        $uri = 'solution/doc';

        $query = [
            'title' => '',
            'description' => '',
            'user' => '',
            'dateCreated' => $date->format('Y-m-d')
        ];

        $response = $elasticClient->sendPost($query, $uri);

        return new Response($response);

    }
}