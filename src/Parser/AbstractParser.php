<?php
/**
 * Created by PhpStorm.
 * User: phoenyx
 * Date: 2019-12-11
 * Time: 23:07
 */

namespace PhoenyxStudio\Parser;


use PhoenyxStudio\Parser\ParseResult\IParseResult;
use DOMElement;
use DOMDocument;

abstract class AbstractParser implements IParser
{
    protected $domDocument;

    protected $xpath;

    protected $source;

    protected $object;

    abstract public function parse(string $html): IParseResult;

    abstract protected function init();

    abstract protected function getRootElement() : DOMElement;

    protected function getElementByTagName(DOMElement $parent, string $tagName) : DOMElement
    {
        $results = $parent->getElementsByTagName($tagName);
        foreach($results as $result) {
            return $result;
        }
    }

    protected function getHtmlElement() : DOMElement
    {
        $this->domDocument = new DOMDocument('1.0', 'UTF-8');
        $this->domDocument->loadHTML($this->source);
        $html = $this->domDocument->getElementsByTagName('html')->item(0);
        return $html;
    }

    public function ejectObject() : stdClass
    {
        return $this->object;
    }

    protected function getFirstElementByXpath(string $xpath, DOMElement $element)
    {
        return $this->xpath
            ->query($xpath, $element)
            ->item(0);
    }

    protected function getElementsByXpath(string $xpath, DOMElement $element)
    {
        return $this->xpath
            ->query($xpath, $element);
    }

}