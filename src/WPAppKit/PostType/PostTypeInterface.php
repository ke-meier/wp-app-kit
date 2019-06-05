<?php

namespace WPAppKit\PostType;

interface PostTypeInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return bool
     */
    public function hasMetaBoxes(): bool;

    /**
     * @return array|MetaBoxInterface[]
     */
    public function getMetaBoxes(): array;

    /**
     * @return array
     */
    public function getConfiguration(): array;
}
