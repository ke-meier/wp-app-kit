<?php

namespace WPAppKit\Model;

interface ResponseBuilderInterface
{
    /**
     * @return array
     */
    public function buildResponse(): array;
}
