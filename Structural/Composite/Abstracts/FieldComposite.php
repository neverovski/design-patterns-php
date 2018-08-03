<?php
/**
 * Created by PhpStorm.
 * User: Dmitry Neverovski
 * Date: 03.08.18
 * Time: 8:40
 */

namespace PatternsPHP\Structural\Composite\Abstracts;

/**
 * Class FieldComposite
 * @package PatternsPHP\Structural\Composite\Abstracts
 */
abstract class FieldComposite extends FormElement
{
    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @param FormElement $field
     */
    public function add(FormElement $field)
    {
        $name = $field->getName();
        $this->fields[$name] = $field;
    }

    /**
     * @param FormElement $component
     */
    public function remove(FormElement $component)
    {
        $this->fields = array_filter($this->fields, function ($child) use ($component) {
            return $child == $component;
        });
    }

    /**
     * @param array $value
     */
    public function setData($value)
    {
        foreach ($this->fields as $name => $field) {
            if (isset($value[$name])) {
                $field->setData($value[$name]);
            }
        }
    }

    /**
     * @return array|null
     */
    public function getData(): ?array
    {
        $data = [];
        foreach ($this->fields as $name => $field) {
            $data[$name] = $field->getData();
        }
        return $data;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $output = "";
        foreach ($this->fields as $name => $field) {
            $output .= $field->render();
        }
        return $output;
    }
}