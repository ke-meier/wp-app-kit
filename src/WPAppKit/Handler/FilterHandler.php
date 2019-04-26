<?php

namespace WPAppKit\Handler;

use WPAppKit\Model\FilterInterface;
use WPAppKit\Model\TagLoadInterface;

class FilterHandler implements TagLoadHandlerInterface
{
    /**
     * @inheritdoc
     */
    public function supports($tagLoad)
    {
        return $tagLoad->getType() === TagLoadInterface::TYPE_FILTER;
    }

    /**
     * @inheritdoc
     */
    public function handleTagLoad($tagLoad)
    {
        if (!$this->supports($tagLoad)) {
            return;
        }

        $tags = is_array($tagLoad->getTag()) ? $tagLoad->getTag() : [$tagLoad->getTag()];
        foreach ($tags as $tag) {
            /** @var FilterInterface $tagLoad */
            add_filter(
                $tag,
                [
                    $tagLoad,
                    'filter',
                ],
                $tagLoad->getPriority(),
                $tagLoad->getAcceptedArguments()
            );
        }
    }
}
