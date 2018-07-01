<?php

namespace PatternsPHP\Creational\Prototype;


/**
 * Class Author
 * @package PatternsPHP\Creational\Prototype
 */
class Author
{
    /**
     * @var
     */
    private $name;

    /**
     * @var Page[]
     */
    private $pages = [];

    /**
     * Author constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param $page
     */
    public function addToPage($page)
    {
        $this->pages[] = $page;
    }
}