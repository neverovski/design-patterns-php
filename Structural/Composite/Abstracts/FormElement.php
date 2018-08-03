<?php
/**
 * Created by PhpStorm.
 * User: Dmitry Neverovski
 * Date: 03.08.18
 * Time: 8:37
 */

namespace PatternsPHP\Structural\Composite\Abstracts;

/**
 * Class FormElement
 * @package PatternsPHP\Structural\Composite\Abstracts
 */
abstract class FormElement
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var
     */
    protected $value;

    /**
     * FormElement constructor.
     * @param string $name
     * @param string $title
     */
    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param $value
     */
    public function setData($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public abstract function render(): string;
}