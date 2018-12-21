<?php

namespace Netzdenke\WPAppKit\Model;

interface ActionInterface extends HookLoadInterface
{
    public function doAction();

    /**
     * @return int
     */
    public function getPriority();

    /**
     * @return int
     */
    public function getAcceptedArguments();
}
