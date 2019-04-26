<?php

namespace WPAppKit\Model;

interface PostTypeInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @return array
     */
    public function getConfiguration();
}
