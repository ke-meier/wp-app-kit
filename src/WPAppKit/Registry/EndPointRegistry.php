<?php

namespace WPAppKit\Registry;

use WPAppKit\Model\EndPointInterface;

class EndPointRegistry
{
    /**
     * @var array|EndPointInterface[]
     */
    protected $endPoints = [];

    /**
     * @param EndPointInterface $endPoint
     *
     * @return EndPointRegistry
     */
    public function addEndPoint($endPoint)
    {
        $this->endPoints[] = $endPoint;

        return $this;
    }

    public function perform()
    {
        foreach ($this->endPoints as $endPoint) {
            $protectedAction = 'wp_ajax_' . $endPoint->getIdentifier();
            add_action(
                $protectedAction,
                [
                    $endPoint,
                    'handleRequest',
                ],
                10,
                2
            );

            if ($endPoint->isAvailableForNotLoggedInUsers()) {
                $publicAction = 'wp_ajax_nopriv_' . $endPoint->getIdentifier();
                add_action(
                    $publicAction,
                    [
                        $endPoint,
                        'handleRequest',
                    ],
                    10,
                    2
                );
            }
        }
    }
}
