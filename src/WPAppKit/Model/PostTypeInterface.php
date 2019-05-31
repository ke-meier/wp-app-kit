<?php

namespace WPAppKit\Model;

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
