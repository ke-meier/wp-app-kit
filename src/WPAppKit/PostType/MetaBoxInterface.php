<?php

namespace WPAppKit\PostType;

interface MetaBoxInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return string
     */
    public function getScreen(): string;

    /**
     * @return string
     */
    public function getContext(): string;

    /**
     * @return string
     */
    public function getPriority(): string;

    /**
     * @return mixed
     */
    public function renderMetaBox();
}
