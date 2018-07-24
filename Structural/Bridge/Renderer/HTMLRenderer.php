<?php

namespace PatternsPHP\Structural\Bridge\Renderer;

use PatternsPHP\Structural\Bridge\Interfaces\IRenderer;

/**
 * Class HTMLRenderer
 * @package PatternsPHP\Structural\Bridge\Renderer
 */
class HTMLRenderer implements IRenderer
{

    /**
     * @param string $text
     * @return string
     */
    public function renderBlock(string $text): string
    {
        return "<div>$text</div>";
    }

    /**
     * @param string $url
     * @param string $name
     * @return string
     */
    public function renderURL(string $url, string $name): string
    {
        return "<a href='$url'>$name</a>";
    }

    /**
     * @param array $parts
     * @return string
     */
    public function renderParts(array $parts): string
    {
        return implode("\n", $parts);
    }
}