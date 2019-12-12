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

abstract class AbstractParser implements IParser
{
    abstract public function parse(string $html): IParseResult;
    protected function getElementByTagName(DOMElement $parent, string $tagName) : DOMElement
    {
        $results = $parent->getElementsByTagName($tagName);
        foreach($results as $result) {
            return $result;
        }
    }
    protected function getHtmlElement(string $source) : DOMElement
    {
        $domDocument = new \DOMDocument('1.0', 'UTF-8');
        $domDocument->loadHTML($source);
        $html = $domDocument->getElementsByTagName('html')->item(0);
        return $html;
        /*$htmls = $domDocument->getElementsByTagName('html');
        foreach($htmls as $html) {
            return $html;
        }*/
    }
}