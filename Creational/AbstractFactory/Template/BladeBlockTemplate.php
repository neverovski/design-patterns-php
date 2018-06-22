<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 22.06.18
 * Time: 22:48
 */

namespace PatternsPHP\Creational\AbstractFactory;


/**
 * Class BladeBlockTemplate
 * @package PatternsPHP\Creational\AbstractFactory
 */
class BladeBlockTemplate implements BlockTemplate
{
    /**
     * @return string
     */
    public function create(): string
    {
        return "Blade block";
    }
}