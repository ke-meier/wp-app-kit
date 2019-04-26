<?php

namespace WPAppKit;

use WPAppKit\Model\EndPointInterface;
use WPAppKit\Model\PostTypeInterface;
use WPAppKit\Model\TagLoadInterface;
use WPAppKit\Registry\EndPointRegistry;
use WPAppKit\Registry\PostTypeRegistry;
use WPAppKit\Registry\TagLoadRegistry;

class WordpressBridge
{
    /**
     * @var TagLoadRegistry
     */
    protected $tagLoadRegistry;

    /**
     * @var PostTypeRegistry
     */
    protected $postTypeRegistry;

    /**
     * @var EndPointRegistry
     */
    protected $endPointRegistry;

    public function __construct()
    {
        $this->tagLoadRegistry = new TagLoadRegistry();
        $this->postTypeRegistry = new PostTypeRegistry();
        $this->endPointRegistry = new EndPointRegistry();
    }

    public function perform()
    {
        $this->tagLoadRegistry->perform();
        $this->postTypeRegistry->perform();
        $this->endPointRegistry->perform();
    }

    /**
     * @param TagLoadInterface $tagLoad
     *
     * @return WordpressBridge
     */
    public function addTagLoad($tagLoad)
    {
        $this->tagLoadRegistry->addTagLoad($tagLoad);

        return $this;
    }

    /**
     * @param PostTypeInterface $postType
     *
     * @return WordpressBridge
     */
    public function addPostType($postType)
    {
        $this->postTypeRegistry->addPostType($postType);

        return $this;
    }

    /**
     * @param EndPointInterface $endPoint
     *
     * @return WordpressBridge
     */
    public function addEndPoint($endPoint)
    {
        $this->endPointRegistry->addEndPoint($endPoint);

        return $this;
    }
}
