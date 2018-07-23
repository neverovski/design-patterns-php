<?php

namespace PatternsPHP\Structural\Adapter\Interfaces;

/**
 * Interface Notification
 * @package PatternsPHP\Structural\Adapter\Interfaces
 */
interface Notification
{
    /**
     * @param string $subject
     * @param string $body
     * @return string
     */
    public function send(string $subject, string $body): string;
}