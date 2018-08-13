<?php

namespace PatternsPHP\Structural\Decorator;

use PatternsPHP\Structural\Decorator\Interfaces\ITextAreaFormat;

/**
 * Class Text
 * @package PatternsPHP\Structural\Decorator
 */
class Text implements ITextAreaFormat
{
    /**
     * @var ITextAreaFormat
     */
    protected $textAreaFormat;

    /**
     * Text constructor.
     * @param ITextAreaFormat $textAreaFormat
     */
    public function __construct(ITextAreaFormat $textAreaFormat)
    {
        $this->textAreaFormat = $textAreaFormat;
    }

    /**
     * @param string $text
     * @return string
     */
    public function text(string $text): string
    {
        return $this->textAreaFormat->text($text);
    }
}