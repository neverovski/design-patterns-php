<?php

namespace PatternsPHP\Structural\Bridge\Tests;

use PatternsPHP\Structural\Bridge\Client;
use PatternsPHP\Structural\Bridge\Page\AboutPage;
use PatternsPHP\Structural\Bridge\Renderer\HTMLRenderer;
use PatternsPHP\Structural\Bridge\Renderer\JsonRenderer;
use PHPUnit\Framework\TestCase;

/**
 * Class BridgeTest
 * @package PatternsPHP\Structural\Bridge\Tests
 */
class BridgeTest extends TestCase
{
    /**
     * Test HTML render
     */
    public function testHtmlRender()
    {
        $HTMLRenderer = new HTMLRenderer();
        $page = new AboutPage($HTMLRenderer, "About page", "about", "page");
        $this->assertEquals("<div>About page</div>\n<a href='about'>page</a>", Client::client($page));
        print("Test HTML render: SUCCESSFUL \n");
    }

    /**
     * Test JSON render
     */
    public function testJsonRender()
    {
        $JSONRenderer = new JsonRenderer();
        $page = new AboutPage($JSONRenderer, "About page", "about", "page");
        $this->assertEquals('{' . "\n" . '"text": "About page",' . "\n" . '"link": {"href": "about", "title": "page"}' . "\n" . '}', Client::client($page));
        print("Test JSON render: SUCCESSFUL \n");
    }
}