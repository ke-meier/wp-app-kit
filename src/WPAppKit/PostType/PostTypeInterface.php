<?php

namespace WPAppKit\PostType;

interface PostTypeInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return array
     */
    public function getConfiguration(): array;
}
