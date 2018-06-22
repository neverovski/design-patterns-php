<?php

namespace PatternsPHP\Creational\AbstractFactory;


/**
 * The Abstract Factory interface
 * @package PatternsPHP\Creational\AbstractFactory
 */
interface TemplateFactory
{
    /**
     * @return BlockTemplate
     */
    public function createBlockTemplate(): BlockTemplate;

    /**
     * @return SectionTemplate
     */
    public function createSectionTemplate(): SectionTemplate;
}