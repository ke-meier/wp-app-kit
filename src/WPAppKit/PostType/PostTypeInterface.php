<?php

namespace WPAppKit\PostType;

interface PostTypeInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param MetaBoxInterface $metaBox
     *
     * @return PostTypeInterface
     */
    public function addMetaBox(MetaBoxInterface $metaBox): PostTypeInterface;

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
