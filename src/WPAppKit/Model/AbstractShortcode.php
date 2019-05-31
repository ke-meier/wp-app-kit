<?php

namespace WPAppKit\Model;

abstract class AbstractShortcode implements ShortcodeInterface
{
    /**
     * @inheritdoc
     */
    public function getType(): string
    {
        return self::TYPE_SHORTCODE;
    }
}
