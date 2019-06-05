<?php

namespace WPAppKit\PostType;

abstract class AbstractMetaBox implements MetaBoxInterface
{
    /**
     * @inheritDoc
     */
    public function getContext(): string
    {
        return 'normal';
    }

    /**
     * @inheritDoc
     */
    public function getPriority(): string
    {
        return 'default';
    }
}
