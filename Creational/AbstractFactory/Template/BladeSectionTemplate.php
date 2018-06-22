<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 22.06.18
 * Time: 22:48
 */

namespace PatternsPHP\Creational\AbstractFactory;


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