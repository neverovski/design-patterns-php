<?php

namespace PatternsPHP\Creational\AbstractFactory\Factories;

use PatternsPHP\Creational\AbstractFactory\Interfaces\TemplateFactory;
use PatternsPHP\Creational\AbstractFactory\Interfaces\BlockTemplate;
use PatternsPHP\Creational\AbstractFactory\Interfaces\SectionTemplate;
use PatternsPHP\Creational\AbstractFactory\Templates\TwigBlockTemplate;
use PatternsPHP\Creational\AbstractFactory\Templates\TwiSectionTemplate;

/**
 * Class TwigTemplateFactory
 * @package PatternsPHP\Creational\AbstractFactory
 */
class TwigTemplateFactory implements TemplateFactory
{

    /**
     * @return BlockTemplate
     */
    public function createBlockTemplate(): BlockTemplate
    {
        return new TwigBlockTemplate();
    }

    /**
     * @return SectionTemplate
     */
    public function createSectionTemplate(): SectionTemplate
    {
        return new TwiSectionTemplate();
    }
}