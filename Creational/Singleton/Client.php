<?php

namespace PatternsPHP\Creational\Singleton;

/**
 * Class Client
 * @package PatternsPHP\Creational\Singleton
 */
class Client
{
    public static function client()
    {
        Logger::setLog("Start!");
        $log1 = Logger::getInstance();
        $log2 = Logger::getInstance();
        if ($log1 === $log2) {
            Logger::setLog("Logger has a single instance.");
        } else {
            Logger::setLog("Loggers are different.");
        }
        Logger::setLog("Finish!");
        return Logger::getLog();
    }
}