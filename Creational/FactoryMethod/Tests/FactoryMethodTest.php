<?php

namespace PatternsPHP\Creational\FactoryMethod\Tests;

use PatternsPHP\Creational\FactoryMethod\Client;
use PatternsPHP\Creational\FactoryMethod\GitHub;
use PatternsPHP\Creational\FactoryMethod\BitBucket;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryMethodTest
 * @package PatternsPHP\Creational\FactoryMethod\Test
 */
class FactoryMethodTest extends TestCase
{
    /**
     * Test client
     */
    public function testCanCreateClient()
    {
        print("\nTest GitHub:\n");
        Client::client(new GitHub("gitHubTest", "test"));
        print("\n");

        print("Test BitBucket:\n");
        Client::client(new BitBucket("BitBucket", "test"));
    }
}