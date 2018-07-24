<?php

namespace PatternsPHP\Structural\Adapter;

use PatternsPHP\Structural\Adapter\Interfaces\INotification;

/**
 * Class TelegramNotification
 * @package PatternsPHP\Structural\Adapter
 */
class TelegramINotification implements INotification
{
    /**
     * @var TelegramApi
     */
    private $telegram;

    /**
     * TelegramNotification constructor.
     * @param TelegramApi $slack
     */
    public function __construct(TelegramApi $slack)
    {
        $this->telegram = $slack;
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