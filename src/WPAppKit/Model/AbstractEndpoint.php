<?php

namespace WPAppKit\Model;

abstract class AbstractEndpoint implements EndPointInterface
{
    /**
     * @return ResponseBuilderInterface
     */
    protected abstract function getResponseBuilder(): ResponseBuilderInterface;

    public function handleRequest()
    {
        $responseBuilder = $this->getResponseBuilder();

        echo json_encode($responseBuilder->buildResponse());
        wp_die();
    }
}
