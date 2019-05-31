<?php

namespace WPAppKit\Model;

interface FilterInterface extends TagLoadInterface
{
    /**
     * @return int
     */
    public function getPriority(): int;

    /**
     * @return int
     */
    public function getAcceptedArguments(): int;
}
