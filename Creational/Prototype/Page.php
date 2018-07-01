<?php

namespace PatternsPHP\Creational\Prototype;


/**
 * Class Page
 * @package PatternsPHP\Creational\Prototype
 */
class Page
{
    /**
     * @var string
     */
    private $context;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $author;

    /**
     * Page constructor.
     * @param string $context
     * @param string $text
     * @param string $author
     */
    public function __construct(string $context, string $text, string $author)
    {
        $this->context = $context;
        $this->text = $text;
        $this->author = $author;
        $this->author->addToPage($this);
    }

    /**
     * Clone
     */
    public function __clone()
    {
        $this->context = "Copy of " . $this->context;
        $this->author->addToPage($this);
        $this->text = "Copy of " . $this->text;
    }

}