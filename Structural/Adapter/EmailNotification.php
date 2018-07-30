<?php

namespace PatternsPHP\Structural\Adapter;

use PatternsPHP\Structural\Adapter\Interfaces\INotification;

/**
 * Class EmailNotification
 * @package PatternsPHP\Structural\Adapter
 */
class EmailNotification implements INotification
{
    /**
     * @var string
     */
    private $email;

    /**
     * EmailNotification constructor.
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $subject
     * @param string $body
     * @return string
     */
    public function send(string $subject, string $body): string
    {
        // mail($this->email, $subject, $body);
        return "Message sent successfully. SUBJECT - $subject. BODY - $body";
    }
}