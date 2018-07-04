<?php
namespace PatternsPHP\Creational\Singleton\Tests;

use PatternsPHP\Creational\Singleton\Client;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    private $expected = ['Start!', 'Logger has a single instance.', 'Finish!'];

    /**
     * Test Singleton
     */
    public function testSingletonClient()
    {
        $client = Client::client();
        $this->assertEmpty(array_merge(array_diff($this->expected, $client), array_diff($client, $this->expected)));
        $this->assertSame(array_diff($this->expected, $client), array_diff($client, $this->expected));
        $this->assertTrue(count($this->expected) == count(array_intersect($this->expected, $client)));
        print("Test Singleton: SUCCESSFUL \n");
    }
}