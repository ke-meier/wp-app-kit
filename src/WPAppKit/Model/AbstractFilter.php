<?php

namespace WPAppKit\Model;

abstract class AbstractFilter implements FilterInterface
{
    /**
     * @inheritdoc
     */
    public function getType(): string
    {
        return self::TYPE_FILTER;
    }

    /**
     * @inheritdoc
     */
    public function getPriority(): int
    {
        return 10;
    }

    /**
     * @inheritdoc
     */
    public function getAcceptedArguments(): int
    {
        return 1;
    }
}
