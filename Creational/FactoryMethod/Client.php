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
     */
    public static function client(ISocialNetwork $social)
    {
        $social->createRepository("Test repository");
    }
}