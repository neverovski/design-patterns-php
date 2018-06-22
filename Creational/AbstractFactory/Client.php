<?php

namespace PatternsPHP\Creational\AbstractFactory;

use PatternsPHP\Creational\AbstractFactory\Interfaces\TemplateFactory;

/**
 * Class Client
 * @package PatternsPHP\Creational\AbstractFactory
 */
class Client
{
    /**
     * @param TemplateFactory $templateFactory
     * @return string
     */
    public static function client(TemplateFactory $templateFactory): string
    {

        $blockTemplate = $templateFactory->createBlockTemplate();
        $sectionTemplate = $templateFactory->createSectionTemplate();
        return $sectionTemplate->createBlock($blockTemplate);
    }
}