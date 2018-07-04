<?php

namespace PatternsPHP\Creational\Singleton;

/**
 * Class Singleton
 * @package PatternsPHP\Creational\Singleton
 */
class Singleton
{

    /**
     * @var array
     */
    private static $instances = array();

    /**
     * Singleton constructor.
     */
    protected function __construct() { }

    /**
     * Get instance
     * @return mixed
     */
    public static function getInstance()
    {
        $subclass = get_called_class();
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static;
        }
        return self::$instances[$subclass];
    }
}