<?php

namespace WPAppKit\Handler;

use WPAppKit\Model\TagLoadInterface;
use WPAppKit\Model\ShortcodeInterface;

class ShortcodeHandler implements TagLoadHandlerInterface
{
    /**
     * @inheritdoc
     */
    public function supports($tagLoad)
    {
        return $tagLoad->getType() === TagLoadInterface::TYPE_SHORTCODE;
    }

    /**
     * @inheritdoc
     */
    public function handleTagLoad($tagLoad)
    {
        if (!$this->supports($tagLoad)) {
            return;
        }

        /** @var ShortcodeInterface $tagLoad */
        add_shortcode(
            $tagLoad->getTag(),
            [
                $tagLoad,
                'getContent',
            ]
        );
    }
}
