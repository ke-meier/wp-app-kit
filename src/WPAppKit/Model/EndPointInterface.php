<?php

namespace WPAppKit\Model;

interface EndPointInterface
{
    /**
     * @return string
     */
    public function getIdentifier(): string;

    /**
     * @return bool
     */
    public function isAvailableForNotLoggedInUsers(): bool;
}
