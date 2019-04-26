<?php

namespace WPAppKit\Model;

interface EndPointInterface
{
    /**
     * @return string
     */
    public function getIdentifier();

    /**
     * @return bool
     */
    public function isAvailableForNotLoggedInUsers();
}
