<?php

namespace PatternsPHP\Creational\FactoryMethod\Tests;

use PatternsPHP\Creational\FactoryMethod\Client;
use PatternsPHP\Creational\FactoryMethod\Social\GitHub;
use PatternsPHP\Creational\FactoryMethod\Social\BitBucket;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryMethodTest
 * @package PatternsPHP\Creational\FactoryMethod\Test
 */
class FactoryMethodTest extends TestCase
{
    /**
     * Test GitHub
     */
    public function testGitHubClient()
    {
        $test = Client::client(new GitHub("gitHubTest", "test"));
        $this->assertEquals($test, "Send request to create a repository in GitHub.");

        print("Test GitHub: SUCCESSFUL \n");
    }

    /**
     * Test BitBucket
     */
    public function testBitBucketClient()
    {
        $test = Client::client(new BitBucket("BitBucket", "test"));
        $this->assertEquals($test, "Send request to create a repository in BitBucket.");

        print("Test BitBucket: SUCCESSFUL \n");
    }
}