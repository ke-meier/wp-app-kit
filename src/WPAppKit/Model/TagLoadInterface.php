<?php

namespace WPAppKit\Model;

interface TagLoadInterface
{
    /**
     * @var string
     */
    const TYPE_ACTION = 'action';
    const TYPE_SHORTCODE = 'shortcode';
    const TYPE_FILTER = 'filter';

    /**
     * @return string
     */
    public function getType();

    /**
     * @return string|array|string[]
     */
    public function getTag();
}
