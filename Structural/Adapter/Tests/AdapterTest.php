<?php

namespace PatternsPHP\Structural\Adapter\Tests;

use PatternsPHP\Structural\Adapter\Client;
use PatternsPHP\Structural\Adapter\EmailNotification;
use PatternsPHP\Structural\Adapter\TelegramApi;
use PatternsPHP\Structural\Adapter\TelegramNotification;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterTest
 * @package PatternsPHP\Structural\Adapter\Tests
 */
class AdapterTest extends TestCase
{
    /**
     * Test adapter email notification
     */
    public function testAdapterEmailNotification()
    {
        $email = new EmailNotification("test@test.com");
        $this->assertEquals("Message sent successfully. SUBJECT - subject TEST. BODY - body TEST", Client::client($email));
        print("Test adapter email notification: SUCCESSFUL \n");
    }

    /**
     * Test adapter telegram notification
     */
    public function testAdapterTelegramNotification()
    {
        $telegramApi = new TelegramApi("123456789");
        $telegram = new TelegramNotification($telegramApi);
        $this->assertEquals("Posted following message into the message - #subject TEST# body TEST", Client::client($telegram));
        print("Test adapter telegram notification: SUCCESSFUL \n");
    }
}