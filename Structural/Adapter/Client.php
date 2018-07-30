<?php

namespace PatternsPHP\Structural\Adapter;

use PatternsPHP\Structural\Adapter\Interfaces\INotification;

/**
 * Class Client
 * @package PatternsPHP\Structural\Adapter
 */
class Client
{
    /**
     * @param INotification $notification
     * @return string
     */
    public static function client(INotification $notification): string
    {
        return $notification->send("subject TEST", "body TEST");
    }
}