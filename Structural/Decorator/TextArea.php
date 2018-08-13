<?php

namespace PatternsPHP\Structural\Decorator;

use PatternsPHP\Structural\Decorator\Interfaces\ITextAreaFormat;

/**
 * Class TextArea
 * @package PatternsPHP\Structural\Decorator
 */
class TextArea implements ITextAreaFormat
{
    /**
     * @param string $text
     * @return string
     */
    public function text(string $text): string
    {
        return $text;
    }
}