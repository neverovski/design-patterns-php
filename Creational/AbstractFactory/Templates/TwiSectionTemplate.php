<?php

namespace PatternsPHP\Creational\AbstractFactory\Templates;

use PatternsPHP\Creational\AbstractFactory\Interfaces\BlockTemplate;
use PatternsPHP\Creational\AbstractFactory\Interfaces\SectionTemplate;

/**
 * Class TwiSectionTemplate
 * @package PatternsPHP\Creational\AbstractFactory
 */
class TwiSectionTemplate implements SectionTemplate
{
    /**
     * @return string
     */
    public function createTitle(): string
    {
        return "Twig title";
    }

    /**
     * @param BlockTemplate $blockTemplate
     * @return string
     */
    public function createBlock(BlockTemplate $blockTemplate): string
    {
        $block = $blockTemplate->create();
        return "BlockTemplate - $block";
    }
}