<?php

namespace App\Factory\Method\V2\Connectors;


use GuzzleHttp\Client;

class InsightlyConnector implements ConnectorInterface
{
    const BASE_PATH = 'https://api.insightly.com/v3.0/';

    private $token;
    private $header;

    /**
     * InsightlyConnector constructor.
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @return bool
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function auth(): bool
    {
        $this->header['Authorization'] = 'Basic ' . $this->token;
        $this->header['Accept-Encoding'] = 'gzip';

        try {
            $this->request('GET', 'Users');
        } catch (\Exception $exception) {
            throw new \Exception('Pleas check your api credential');
        }

        return true;
    }

    /**
     * @param string $method
     * @param string $entityName
     * @param array $data
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(string $method, string $entityName, array $data = null): array
    {
        $method = strtoupper($method);

        $this->header['Content-Type'] = 'application/json';
        $this->header['Accept'] = 'application/json';

        $client = new Client([
            'headers' => $this->header
        ]);

        $requestData = [];
        $requestData['headers'] = $this->header;
        if (true === !is_null($data))
            $requestData['json'] = $data;

        $response = $client->request($method, self::BASE_PATH . ucfirst($entityName),
            $requestData
        );

        return json_decode($response->getBody()->getContents(), 1);
    }
}