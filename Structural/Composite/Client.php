<?php
/**
 * Created by PhpStorm.
 * User: Dmitry Neverovski
 * Date: 03.08.18
 * Time: 9:29
 */

namespace PatternsPHP\Structural\Composite;

use PatternsPHP\Structural\Composite\Abstracts\FormElement;

/**
 * Class Client
 * @package PatternsPHP\Structural\Composite
 */
class Client
{
    /**
     * @param FormElement $form
     * @return string
     */
    public static function client(FormElement $form): string
    {
        return $form->render();
    }
}