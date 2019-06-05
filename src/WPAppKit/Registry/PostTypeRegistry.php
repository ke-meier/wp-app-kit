<?php

namespace WPAppKit\Registry;

use WPAppKit\PostType\PostTypeInterface;

class PostTypeRegistry
{
    /**
     * @var array|PostTypeInterface[]
     */
    protected $postTypes = [];

    /**
     * @param PostTypeInterface $postType
     *
     * @return PostTypeRegistry
     */
    public function addPostType($postType): PostTypeRegistry
    {
        $this->postTypes[] = $postType;

        return $this;
    }

    public function perform()
    {
        foreach ($this->postTypes as $postType) {
            add_action(
                'init',
                function () use ($postType) {
                    register_post_type($postType->getId(), $postType->getConfiguration());
                }
            );
        }
    }
}
