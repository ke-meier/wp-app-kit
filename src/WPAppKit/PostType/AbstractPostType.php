<?php

namespace WPAppKit\PostType;

abstract class AbstractPostType implements PostTypeInterface
{
    /**
     * @var array|MetaBoxInterface[]
     */
    protected $metaBoxes = [];

    /**
     * @inheritDoc
     */
    public function addMetaBox(MetaBoxInterface $metaBox): PostTypeInterface
    {
        $this->metaBoxes[] = $metaBox;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function hasMetaBoxes(): bool
    {
        return !empty($this->metaBoxes);
    }

    /**
     * @inheritDoc
     */
    public function getMetaBoxes(): array
    {
        return $this->metaBoxes;
    }
}
