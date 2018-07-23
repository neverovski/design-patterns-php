<?php

namespace PatternsPHP\Structural\Adapter;

/**
 * Class Client
 * @package PatternsPHP\Structural\Adapter
 */
class Client
{
    /**
     * @return string
     */
    public static function client(): string
    {
        $notification = new EmailNotification("test@test.com");
        $client = $notification->send("Test", "test");
        return $client;
    }
}