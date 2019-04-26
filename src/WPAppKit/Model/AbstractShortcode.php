<?php

namespace WPAppKit\Model;

abstract class AbstractShortcode implements ShortcodeInterface
{
    /**
     * @inheritdoc
     */
    public function getType()
    {
        return self::TYPE_SHORTCODE;
    }
}
