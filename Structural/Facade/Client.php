<?php

namespace PatternsPHP\Structural\Facade;

/**
 * Class Client
 * @package PatternsPHP\Structural\Facade
 */
class Client
{
    /**
     * @param VideoDownload $videoDownload
     * @param string $link
     * @return string
     */
    public static function client(VideoDownload $videoDownload, string $link): string
    {
        return $videoDownload->download($link);
    }
}