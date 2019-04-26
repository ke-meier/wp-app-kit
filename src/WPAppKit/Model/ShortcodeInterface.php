<?php

namespace WPAppKit\Model;

interface ShortcodeInterface extends TagLoadInterface
{
    public function getContent($attributes, $content);
}
