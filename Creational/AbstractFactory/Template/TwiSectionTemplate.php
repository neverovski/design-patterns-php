<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 22.06.18
 * Time: 22:47
 */

namespace PatternsPHP\Creational\AbstractFactory;


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