<?php

namespace PatternsPHP\Structural\Adapter;

/**
 * Class TelegramApi
 * @package PatternsPHP\Structural\Adapter
 */
class TelegramApi
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * TelegramApi constructor.
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param $message
     * @return string
     */
    public function sendMessage($message): string
    {
        return "Posted following message into the message - $message";
    }
}