<?php

namespace PatternsPHP\Structural\Bridge\Renderer;

use PatternsPHP\Structural\Bridge\Interfaces\IRenderer;

/**
 * Class JsonRenderer
 * @package PatternsPHP\Structural\Bridge\Renderer
 */
class JsonRenderer implements IRenderer
{

    /**
     * @param string $text
     * @return string
     */
    public function renderBlock(string $text): string
    {
        return '"text": "' . $text . '"';
    }

    /**
     * @param string $url
     * @param string $name
     * @return string
     */
    public function renderURL(string $url, string $name): string
    {
        return '"link": {"href": "' . $url . '", "title": "' . $name . '"}';
    }

    /**
     * @param array $parts
     * @return string
     */
    public function renderParts(array $parts): string
    {
        return "{\n" . implode(",\n", array_filter($parts)) . "\n}";
    }
}