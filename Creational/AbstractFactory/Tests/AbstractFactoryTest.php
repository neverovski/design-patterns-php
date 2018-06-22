<?php

namespace PatternsPHP\Creational\AbstractFactory\Tests;

use PatternsPHP\Creational\AbstractFactory\Factories\BladeTemplateFactory;
use PatternsPHP\Creational\AbstractFactory\Factories\TwigTemplateFactory;
use PatternsPHP\Creational\AbstractFactory\Client;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractFactoryTest
 * @package PatternsPHP\Creational\AbstractFactory\Test
 */
class AbstractFactoryTest extends TestCase
{
    /**
     * Test Twig
     */
    public function testTwigCreateClient()
    {
        $this->assertEquals('BlockTemplate - Twig block', Client::client(new TwigTemplateFactory()));
        print("Test Twig factory: SUCCESSFUL \n");
    }

    /**
     * Test Blade
     */
    public function testBladeCreateClient()
    {

        $this->assertEquals('BlockTemplate - Blade block', Client::client(new BladeTemplateFactory()));
        print("Test Blade factory: SUCCESSFUL \n");
    }
}