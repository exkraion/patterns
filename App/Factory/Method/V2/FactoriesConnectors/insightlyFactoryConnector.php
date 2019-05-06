<?php

namespace App\Factory\Method\V2\FactoriesConnectors;


use App\Factory\Method\V2\Connectors\ConnectorInterface;
use App\Factory\Method\V2\Connectors\InsightlyConnector;

class insightlyFactoryConnector extends FactoryConnectorAbstract
{
    private $token;

    /**
     * insightlyFactoryConnector constructor.
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @return ConnectorInterface
     */
    public function getConnector(): ConnectorInterface
    {
        return new InsightlyConnector($this->token);
    }
}