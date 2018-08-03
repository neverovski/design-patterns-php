<?php
/**
 * Created by PhpStorm.
 * User: Dmitry Neverovski
 * Date: 03.08.18
 * Time: 8:46
 */

namespace PatternsPHP\Structural\Composite;

use PatternsPHP\Structural\Composite\Abstracts\FormElement;

/**
 * Class TextArea
 * @package PatternsPHP\Structural\Composite
 */
class TextArea extends FormElement
{

    /**
     * TextArea constructor.
     * @param string $name
     * @param string $title
     */
    public function __construct(string $name, string $title)
    {
        parent::__construct($name, $title);
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return "<textarea name=\"{$this->name}\" placeholder=\"{$this->title}\">{$this->value}</textarea>";
    }
}