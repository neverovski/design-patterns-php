<?php

namespace PatternsPHP\Creational\AbstractFactory;


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