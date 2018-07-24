<?php

namespace PatternsPHP\Structural\Bridge\Abstracts;

use PatternsPHP\Structural\Bridge\Interfaces\IRenderer;

/**
 * Class Page
 * @package PatternsPHP\Structural\Bridge\Abstracts
 */
abstract class Page
{
    /**
     * @var IRenderer
     */
    protected $renderer;

    /**
     * Page constructor.
     * @param IRenderer $renderer
     */
    public function __construct(IRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * @param IRenderer $renderer
     */
    public function changeRenderer(IRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * @return mixed
     */
    abstract public function view();
}