<?php

namespace WPAppKit\Handler;

use WPAppKit\Model\TagLoadInterface;

interface TagLoadHandlerInterface
{
    /**
     * @param TagLoadInterface $tagLoad
     *
     * @return bool
     */
    public function supports(TagLoadInterface $tagLoad): bool;

    /**
     * @param TagLoadInterface $tagLoad
     */
    public function handleTagLoad(TagLoadInterface $tagLoad);
}
