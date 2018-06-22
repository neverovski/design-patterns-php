<?php

namespace PatternsPHP\Creational\FactoryMethod;

use PatternsPHP\Creational\FactoryMethod\Interfaces\ISocialNetwork;

/**
 * Class Client
 * @package PatternsPHP\Creational\FactoryMethod
 */
class Client
{
    /**
     * @param ISocialNetwork $social
     * @return string
     */
    public static function client(ISocialNetwork $social): string
    {
        return $social->createRepository("Test repository");
    }
}