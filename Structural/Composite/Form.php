<?php
/**
 * Created by PhpStorm.
 * User: Dmitry Neverovski
 * Date: 03.08.18
 * Time: 9:06
 */

namespace PatternsPHP\Structural\Composite;

use PatternsPHP\Structural\Composite\Abstracts\FieldComposite;

/**
 * Class Form
 * @package PatternsPHP\Structural\Composite
 */
class Form extends FieldComposite
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $method = "GET";

    /**
     * Form constructor.
     * @param string $name
     * @param string $title
     * @param string $url
     */
    public function __construct(string $name, string $title, string $url)
    {
        parent::__construct($name, $title);
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $output = parent::render();
        return "<form action=\"{$this->url}\" method=\"{$this->method}\">\n<h1>{$this->title}</h1>\n$output</form>\n";
    }
}