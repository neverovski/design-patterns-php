<?php

namespace PatternsPHP\Creational\AbstractFactory\Factories;

use PatternsPHP\Creational\AbstractFactory\Interfaces\TemplateFactory;
use PatternsPHP\Creational\AbstractFactory\Interfaces\BlockTemplate;
use PatternsPHP\Creational\AbstractFactory\Interfaces\SectionTemplate;
use PatternsPHP\Creational\AbstractFactory\Templates\BladeBlockTemplate;
use PatternsPHP\Creational\AbstractFactory\Templates\BladeSectionTemplate;

/**
 * Class BladeFactory
 * @package PatternsPHP\Creational\AbstractFactory
 */
class BladeTemplateFactory implements TemplateFactory
{

    /**
     * @return BlockTemplate
     */
    public function createBlockTemplate(): BlockTemplate
    {
        return new BladeBlockTemplate();
    }

    /**
     * @return SectionTemplate
     */
    public function createSectionTemplate(): SectionTemplate
    {
        return new BladeSectionTemplate();
    }
}