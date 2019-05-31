<?php

namespace WPAppKit\Registry;

use WPAppKit\Handler\ActionHandler;
use WPAppKit\Handler\FilterHandler;
use WPAppKit\Handler\TagLoadHandlerInterface;
use WPAppKit\Handler\ShortcodeHandler;
use WPAppKit\Model\TagLoadInterface;

class TagLoadRegistry
{
    /**
     * @var array|TagLoadInterface[]
     */
    protected $tagLoads = [];

    /**
     * @var array|TagLoadHandlerInterface[]
     */
    protected $handlers = [];

    public function __construct()
    {
        $this->handlers[TagLoadInterface::TYPE_ACTION] = new ActionHandler();
        $this->handlers[TagLoadInterface::TYPE_FILTER] = new FilterHandler();
        $this->handlers[TagLoadInterface::TYPE_SHORTCODE] = new ShortcodeHandler();
    }

    /**
     * @param TagLoadInterface $tagLoad
     *
     * @return TagLoadRegistry
     */
    public function addTagLoad(TagLoadInterface $tagLoad): TagLoadRegistry
    {
        $this->tagLoads[] = $tagLoad;

        return $this;
    }

    public function perform()
    {
        foreach ($this->tagLoads as $tagLoad) {
            $tagLoadType = $tagLoad->getType();
            if (key_exists($tagLoadType, $this->handlers)) {
                $handler = $this->handlers[$tagLoadType];
                $handler->handleTagLoad($tagLoad);
            }
        }
    }
}
