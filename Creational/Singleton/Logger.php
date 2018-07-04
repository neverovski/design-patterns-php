<?php

namespace PatternsPHP\Creational\Singleton;

/**
 * Class Logger
 * @package PatternsPHP\Creational\Singleton
 */
class Logger extends Singleton
{
    /**
     * @var bool|resource
     */
    private $log;

    /**
     * Logger constructor.
     */
    protected function __construct()
    {
        $this->log = [];
    }

    /**
     * @param string $message
     */
    public function writeLog(string $message)
    {
        array_push($this->log, "$message");
    }

    public static function getLog() {
        $logger = static::getInstance();
        return $logger->log;
    }

    /**
     * @param string $message
     */
    public static function setLog(string $message)
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }
}