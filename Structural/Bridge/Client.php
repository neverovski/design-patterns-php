<?php

namespace PatternsPHP\Structural\Bridge;

use PatternsPHP\Structural\Bridge\Abstracts\Page;

/**
 * Class Client
 * @package PatternsPHP\Structural\Bridge
 */
class Client
{
    /**
     * @param Page $page
     * @return string
     */
    public static function client(Page $page): string
    {
        return $page->view();
    }
}