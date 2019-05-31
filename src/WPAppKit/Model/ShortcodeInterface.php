<?php

namespace WPAppKit\Model;

interface ShortcodeInterface extends TagLoadInterface
{
    /**
     * @param array|string $attributes
     * @param string $content
     *
     * @return string
     */
    public function getContent($attributes, string $content): string;
}
