<?php

namespace PatternsPHP\Creational\AbstractFactory\Interfaces;


/**
 * Interface BlockTemplate
 * @package PatternsPHP\Creational\AbstractFactory
 */
interface BlockTemplate
{
    /**
     * @return string
     */
    public function create(): string;
}