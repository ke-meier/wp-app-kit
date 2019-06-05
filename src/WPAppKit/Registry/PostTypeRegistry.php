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
            $configuration = $postType->getConfiguration();
            if ($postType->hasMetaBoxes()) {
                $metaBoxes = $postType->getMetaBoxes();
                $configuration['register_meta_box_cb'] = function () use ($metaBoxes) {
                    foreach ($metaBoxes as $metaBox) {
                        add_meta_box(
                            $metaBox->getId(),
                            $metaBox->getTitle(),
                            [
                                $metaBox,
                                'renderMetaBox',
                            ],
                            $metaBox->getScreen(),
                            $metaBox->getContext(),
                            $metaBox->getPriority()
                        );
                    }
                };
            }

            add_action(
                'init',
                function () use ($postType, $configuration) {
                    register_post_type($postType->getId(), $configuration);
                }
            );
        }
    }
}
