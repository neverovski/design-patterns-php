<?php

namespace PatternsPHP\Creational\AbstractFactory\Templates;

use PatternsPHP\Creational\AbstractFactory\Interfaces\BlockTemplate;

/**
 * Class BladeBlockTemplate
 * @package PatternsPHP\Creational\AbstractFactory
 */
class BladeBlockTemplate implements BlockTemplate
{
    /**
     * @return string
     */
    public function create(): string
    {
        return "Blade block";
    }
}