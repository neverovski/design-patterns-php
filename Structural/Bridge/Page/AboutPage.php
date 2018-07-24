<?php

namespace PatternsPHP\Structural\Bridge\Page;

use PatternsPHP\Structural\Bridge\Abstracts\Page;
use PatternsPHP\Structural\Bridge\Interfaces\IRenderer;

/**
 * Class AboutPage
 * @package PatternsPHP\Structural\Bridge\Page
 */
class AboutPage extends Page
{
    /**
     * @var string
     */
    protected $content;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $name;

    /**
     * AboutPage constructor.
     * @param IRenderer $renderer
     * @param string $content
     * @param string $url
     * @param string $name
     */
    public function __construct(IRenderer $renderer, string $content, string $url, string $name)
    {
        parent::__construct($renderer);
        $this->content = $content;
        $this->url = $url;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderBlock($this->content),
            $this->renderer->renderURL($this->url, $this->name)
        ]);
    }
}