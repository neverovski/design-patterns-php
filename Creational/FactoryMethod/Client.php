<?php

namespace PatternsPHP\Creational\FactoryMethod;

/**
 * Class Client
 * @package PatternsPHP\Creational\FactoryMethod
 */
class Client
{
    /**
     * @param ISocialNetwork $social
     */
    public static function client(ISocialNetwork $social)
    {
        $social->createRepository("Test repository");
    }
}

print("Test GitHub:\n");

Client::client(new GitHub("gitHubTest", "test"));

print("\n");

print("Test BitBucket:\n");

Client::client(new BitBucket("BitBucket", "test"));

print("\n");