<?php

namespace WPAppKit;

use WPAppKit\Model\EndPointInterface;
use WPAppKit\Model\TagLoadInterface;
use WPAppKit\PostType\PostTypeInterface;
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
    public function addTagLoad(TagLoadInterface $tagLoad): WordpressBridge
    {
        $this->tagLoadRegistry->addTagLoad($tagLoad);

        return $this;
    }

    /**
     * @param PostTypeInterface $postType
     *
     * @return WordpressBridge
     */
    public function addPostType(PostTypeInterface $postType): WordpressBridge
    {
        $this->postTypeRegistry->addPostType($postType);

        return $this;
    }

    /**
     * @param EndPointInterface $endPoint
     *
     * @return WordpressBridge
     */
    public function addEndPoint(EndPointInterface $endPoint): WordpressBridge
    {
        $this->endPointRegistry->addEndPoint($endPoint);

        return $this;
    }
}
