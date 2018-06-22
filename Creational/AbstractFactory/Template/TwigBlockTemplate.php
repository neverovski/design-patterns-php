<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 22.06.18
 * Time: 22:47
 */

namespace PatternsPHP\Creational\AbstractFactory;


/**
 * Class TwigBlockTemplate
 * @package PatternsPHP\Creational\AbstractFactory
 */
class TwigBlockTemplate implements BlockTemplate
{

    /**
     * @return string
     */
    public function create(): string
    {
        return "Twig block";
    }
}