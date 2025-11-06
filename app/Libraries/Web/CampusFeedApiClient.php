<?php

namespace App\Libraries\Web;

class CampusFeedApiClient
{
    protected $client;
    protected $apiBaseUrl;

    public function __construct()
    {
        $this->client = \Config\Services::curlrequest();
        $this->apiBaseUrl = getenv('api.baseURL');
    }

    public function checkApi()
    {
        try {
            $response = $this->client->request('GET', $this->apiBaseUrl . '/api/api_check');
            return json_decode($response->getBody());
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function checkDbConnection()
    {
        try {
            $response = $this->client->request('GET', $this->apiBaseUrl . '/api/api_check/checkDbConnection');
            return json_decode($response->getBody());
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}