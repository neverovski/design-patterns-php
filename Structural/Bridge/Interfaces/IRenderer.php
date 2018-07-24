<?php

namespace PatternsPHP\Structural\Bridge\Interfaces;

/**
 * Interface IRenderer
 * @package PatternsPHP\Structural\Bridge\Interfaces
 */
interface IRenderer
{
    /**
     * @param string $text
     * @return string
     */
    public function renderBlock(string $text): string;

    /**
     * @param string $url
     * @param string $name
     * @return string
     */
    public function renderURL(string $url, string $name): string;

    /**
     * @param array $parts
     * @return string
     */
    public function renderParts(array $parts): string;
}