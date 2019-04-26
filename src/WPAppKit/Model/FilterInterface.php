<?php

namespace WPAppKit\Model;

interface FilterInterface extends TagLoadInterface
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
