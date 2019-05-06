<?php

namespace App\Factory\Method\V2\Connectors;

interface ConnectorInterface
{
    /**
     * @return bool
     */
    public function auth(): bool;

    /**
     * @param string $method
     * @param string $entityName
     * @param array $data
     * @return array
     */
    public function request(string $method, string $entityName, array $data): array;
}