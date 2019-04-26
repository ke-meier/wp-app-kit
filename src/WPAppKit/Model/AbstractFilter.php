<?php

namespace WPAppKit\Model;

abstract class AbstractFilter implements FilterInterface
{
    /**
     * @inheritdoc
     */
    public function getType()
    {
        return self::TYPE_FILTER;
    }

    /**
     * @inheritdoc
     */
    public function getPriority()
    {
        return 10;
    }

    /**
     * @inheritdoc
     */
    public function getAcceptedArguments()
    {
        return 1;
    }
}
