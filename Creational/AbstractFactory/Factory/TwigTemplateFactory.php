<?php

namespace PatternsPHP\Creational\AbstractFactory;


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