<?php

namespace App\Http\Integrations\Raygun;

use GuzzleHttp\Client;
use Raygun4php\RaygunClient;
use Raygun4php\Transports\GuzzleSync;

final readonly class RaygunConnector
{
    /**
     * Get client.
     */
    public function getClient()
    {
        $httpClient = new Client([
            'base_uri' => config('services.raygun.host'),
            'timeout'  => 2.0,
            'headers'  => ['X-ApiKey' => config('services.raygun.key')]
        ]);
        $transport = new GuzzleSync($httpClient);
        return new RaygunClient($transport);
    }
}
