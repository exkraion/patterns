<?php

namespace App\Factory\Method\V2\FactoriesConnectors;

use App\Factory\Method\V2\Connectors\ConnectorInterface;

abstract class FactoryConnectorAbstract
{
    /**
     * @return ConnectorInterface
     */
    abstract public function getConnector(): ConnectorInterface;

    /**
     * @param string $entityName
     * @param array $data
     * @return array
     */
    public function createEntity(string $entityName, array $data): array
    {
        $connector = $this->getConnector();
        $connector->auth();
        $connector->request('POST', $entityName, $data);

        return $connector->getResponseContents();
    }
}