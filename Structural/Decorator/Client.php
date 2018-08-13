<?php

namespace PatternsPHP\Structural\Decorator;

use PatternsPHP\Structural\Decorator\Interfaces\ITextAreaFormat;

/**
 * Class Client
 * @package PatternsPHP\Structural\Decorator
 */
class Client
{
    /**
     * @param ITextAreaFormat $form
     * @param string $text
     * @return string
     */
    public static function client(ITextAreaFormat $format, string $text): string
    {
        return $format->text($text);
    }
}