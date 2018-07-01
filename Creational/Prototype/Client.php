<?php

namespace PatternsPHP\Creational\Prototype;


/**
 * Class Client
 * @package PatternsPHP\Creational\Prototype
 */
class Client
{
    /**
     * @return Page
     */
    public static function client(): Page
    {
        $author = new Author("Test, test");
        $page = new Page("Context test", "Text test", $author);

        $clonePage = clone $page;
        return $clonePage;
    }
}