<?php

namespace PatternsPHP\Creational\AbstractFactory\Interfaces;


/**
 * Interface SectionTemplate
 * @package PatternsPHP\Creational\AbstractFactory
 */
interface SectionTemplate
{
    /**
     * @return string
     */
    public function createTitle(): string;

    /**
     * @param BlockTemplate $blockTemplate
     * @return string
     */
    public function createBlock(BlockTemplate $blockTemplate): string;
}