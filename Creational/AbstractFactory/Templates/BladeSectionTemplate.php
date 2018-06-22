<?php

namespace PatternsPHP\Creational\AbstractFactory\Templates;

use PatternsPHP\Creational\AbstractFactory\Interfaces\BlockTemplate;
use PatternsPHP\Creational\AbstractFactory\Interfaces\SectionTemplate;

/**
 * Class BladeSectionTemplate
 * @package PatternsPHP\Creational\AbstractFactory
 */
class BladeSectionTemplate implements SectionTemplate
{

    /**
     * @return string
     */
    public function createTitle(): string
    {
        return "Blade title";
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