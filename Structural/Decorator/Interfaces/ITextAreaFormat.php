<?php

namespace PatternsPHP\Structural\Decorator\Interfaces;

/**
 *  Interface ITextAreaFormat
 * @package PatternsPHP\Structural\Decorator\Interfaces
 */
interface ITextAreaFormat
{
    /**
     * @param string $text
     * @return string
     */
    public function text(string $text): string;
}