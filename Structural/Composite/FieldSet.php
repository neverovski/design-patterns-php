<?php
/**
 * Created by PhpStorm.
 * User: Dmitry Neverovski
 * Date: 03.08.18
 * Time: 9:04
 */

namespace PatternsPHP\Structural\Composite;

use PatternsPHP\Structural\Composite\Abstracts\FieldComposite;

/**
 * Class FieldSet
 * @package PatternsPHP\Structural\Composite
 */
class FieldSet extends FieldComposite
{
    /**
     * @return string
     */
    public function render(): string
    {
        $output = parent::render();
        return "<fieldset><legend>{$this->title}</legend>\n$output</fieldset>\n";
    }
}