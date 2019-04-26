<?php

namespace WPAppKit\Model;

interface ActionInterface extends TagLoadInterface
{
    /**
     * @return int
     */
    public function getPriority();

    /**
     * @return int
     */
    public function getAcceptedArguments();
}
