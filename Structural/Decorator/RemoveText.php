<?php

namespace PatternsPHP\Structural\Decorator;

/**
 * Class Text
 * @package PatternsPHP\Structural\Decorator
 */
class RemoveText extends Text
{
    /**
     * @param string $text
     * @return string
     */
    public function text(string $text): string
    {
        $text = parent::text($text);
        return strip_tags($text);
    }
}