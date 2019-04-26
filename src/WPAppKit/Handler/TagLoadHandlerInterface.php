<?php

namespace WPAppKit\Handler;

use WPAppKit\Model\TagLoadInterface;

interface TagLoadHandlerInterface
{
    /**
     * @param TagLoadInterface $tagLoad
     *
     * @return boolean
     */
    public function supports($tagLoad);

    /**
     * @param TagLoadInterface $tagLoad
     */
    public function handleTagLoad($tagLoad);
}
