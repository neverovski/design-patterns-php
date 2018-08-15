<?php

namespace PatternsPHP\Structural\Facade\Tests;

use PatternsPHP\Structural\Facade\Client;
use PatternsPHP\Structural\Facade\VideoDownload;
use PHPUnit\Framework\TestCase;

/** 
 * Class FacadeTest
 * @package PatternsPHP\Structural\Facade
 */
class FacadeTest extends TestCase
{
    public function testVideo()
    {
        $VideoDownload = new VideoDownload("APIKEY");
        $client = Client::client($VideoDownload, "http://test.test?test=test");
        $this->assertEquals("Url: http://test.test?test=test", $client);

        print("Test Facade testVideo: SUCCESSFUL \n");
    }
}