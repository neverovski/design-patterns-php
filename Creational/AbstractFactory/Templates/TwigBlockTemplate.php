<?php

namespace PatternsPHP\Creational\AbstractFactory\Templates;

use PatternsPHP\Creational\AbstractFactory\Interfaces\BlockTemplate;

/**
 * Class TwigBlockTemplate
 * @package PatternsPHP\Creational\AbstractFactory
 */
class TwigBlockTemplate implements BlockTemplate
{

    /**
     * @return string
     */
    public function create(): string
    {
        return "Twig block";
    }
}