<?php

namespace WPAppKit\Model;

abstract class AbstractAction implements ActionInterface
{
    /**
     * @inheritdoc
     */
    public function getType(): string
    {
        return self::TYPE_ACTION;
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
