<?php

namespace WPAppKit\Model;

interface ShortcodeInterface extends TagLoadInterface
{
    /**
     * @param array $attributes
     * @param string $content
     *
     * @return string
     */
    public function getContent(array $attributes, string $content): string;
}
