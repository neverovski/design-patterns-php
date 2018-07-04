<?php

namespace PatternsPHP\Creational\Prototype\Tests;


use PatternsPHP\Creational\Prototype\Client;
use PatternsPHP\Creational\Prototype\Page;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testPrototypeClient()
    {
        $clonePage = Client::client();
        $this->assertInstanceOf(Page::class, $clonePage);

        print("Test Prototype: SUCCESSFUL \n");
    }
}