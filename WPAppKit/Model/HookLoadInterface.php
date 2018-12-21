<?php

namespace Netzdenke\WPAppKit\Model;

interface HookLoadInterface
{
    /**
     * @var string
     */
    const TYPE_ACTION = 'action';

    /**
     * @return string
     */
    public function getHook();

    /**
     * @return string
     */
    public function getType();
}
