<?php

namespace WPAppKit\Handler;

use WPAppKit\Model\ActionInterface;
use WPAppKit\Model\TagLoadInterface;

class ActionHandler implements TagLoadHandlerInterface
{
    /**
     * @inheritdoc
     */
    public function supports($tagLoad)
    {
        return $tagLoad->getType() === TagLoadInterface::TYPE_ACTION;
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
            /** @var ActionInterface $tagLoad */
            add_action(
                $tag,
                [
                    $tagLoad,
                    'doAction',
                ],
                $tagLoad->getPriority(),
                $tagLoad->getAcceptedArguments()
            );
        }
    }
}
