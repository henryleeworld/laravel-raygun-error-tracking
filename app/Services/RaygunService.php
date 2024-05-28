<?php

namespace App\Services;

use GuzzleHttp\Client;
use Raygun4php\RaygunClient;
use Raygun4php\Transports\GuzzleSync;

class RaygunService
{
    /**
     * Get client.
     */
    public function getClient()
    {
        $httpClient = new Client([
            'base_uri' => config('raygun.host'),
            'timeout'  => 2.0,
            'headers'  => ['X-ApiKey' => config('raygun.key')]
        ]);
        $transport = new GuzzleSync($httpClient);
        return new RaygunClient($transport);
    }
}
