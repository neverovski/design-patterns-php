<?php

namespace PatternsPHP\Structural\Adapter;

use PatternsPHP\Structural\Adapter\Interfaces\INotification;

/**
 * Class TelegramNotification
 * @package PatternsPHP\Structural\Adapter
 */
class TelegramNotification implements INotification
{
    /**
     * @var TelegramApi
     */
    private $telegram;

    /**
     * TelegramNotification constructor.
     * @param TelegramApi $telegram
     */
    public function __construct(TelegramApi $telegram)
    {
        $this->telegram = $telegram;
    }

    /**
     * @param string $subject
     * @param string $body
     * @return string
     */
    public function send(string $subject, string $body): string
    {
        $slackMessage = "#" . $subject . "# " . strip_tags($body);
        return $this->telegram->sendMessage($slackMessage);
    }
}