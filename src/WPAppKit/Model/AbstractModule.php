<?php

namespace WPAppKit\Model;

use WPAppKit\WordpressBridge;

abstract class AbstractModule
{
    /**
     * @var WordpressBridge
     */
    protected $wordpressBridge;

    /**
     * @param WordpressBridge $wordpressBridge
     */
    public function __construct(WordpressBridge $wordpressBridge)
    {
        $this->wordpressBridge = $wordpressBridge;

        $this->loadIntoBridge();
    }

    abstract protected function loadIntoBridge();
}
