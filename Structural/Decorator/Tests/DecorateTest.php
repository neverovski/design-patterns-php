<?php
/**
 * Created by PhpStorm.
 * User: Dmitry Neverovski
 * Date: 03.08.18
 * Time: 9:45
 */

namespace PatternsPHP\Structural\Decorator\Tests;

use PatternsPHP\Structural\Decorator\Client;
use PatternsPHP\Structural\Decorator\RemoveText;
use PatternsPHP\Structural\Decorator\TextArea;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testText()
    {
        $text = new TextArea();
        $client = Client::client($text, "<p>Test html paragraph.!</p>");
        $this->assertEquals("<p>Test html paragraph.!</p>", $client);

        print("Test Decorate testText: SUCCESSFUL \n");

    }

    public function testRemoveText()
    {
        $text = new TextArea();
        $textRemove = new RemoveText($text);
        $client = Client::client($textRemove, "<p>Test remove html paragraph.!</p>");
        $this->assertEquals("Test remove html paragraph.!", $client);

        print("Test Decorate testRemoveText: SUCCESSFUL \n");
    }
}