<?php

namespace WPAppKit\Model;

abstract class AbstractAction implements ActionInterface
{
    /**
     * @inheritdoc
     */
    public function getType()
    {
        return self::TYPE_ACTION;
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
