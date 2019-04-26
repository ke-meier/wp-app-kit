<?php

namespace WPAppKit\Model;

use NetzdenkeTheme\WordpressBridge\WordpressBridge;

abstract class AbstractModule
{
    /**
     * @var WordpressBridge
     */
    protected $wordpressBridge;

    /**
     * @param WordpressBridge $wordpressBridge
     */
    public function __construct($wordpressBridge)
    {
        $this->wordpressBridge = $wordpressBridge;

        $this->loadIntoBridge();
    }

    abstract protected function loadIntoBridge();
}
