<?php

namespace PatternsPHP\Structural\Facade;

/** 
 * Class VideoDownload
 * @package PatternsPHP\Structural\Facade
 */
class VideoDownload
{
    /**
     * @var Video
     */
    private $video;

    /** 
     * @param string $key 
     */
    public function __construct(string $key)
    {
        $this->video = new Video($key);
    }

    /** 
     * @param string $url
     */
    public function download(string $url): string
    {
        return "Url: $url";
    }
}