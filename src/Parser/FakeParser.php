<?php
/**
 * Created by PhpStorm.
 * User: phoenyx
 * Date: 2019-12-12
 * Time: 22:02
 */

namespace PhoenyxStudio\Parser;

use PhoenyxStudio\Parser\ParseResult\IParseResult;
use PhoenyxStudio\Parser\ParseResult\GeneralParseResult;

class FakeParser extends AbstractParser
{
    private function createObject()
    {
        $a = new Class {
            private $title;
            private $heading;
            private $listItems;
            /**
             * @return mixed
             */
            public function getTitle()
            {
                return $this->title;
            }

            /**
             * @param mixed $title
             */
            public function setTitle($title)
            {
                $this->title = $title;
            }

            /**
             * @return mixed
             */
            public function getHeading()
            {
                return $this->heading;
            }

            /**
             * @param mixed $heading
             */
            public function setHeading($heading)
            {
                $this->heading = $heading;
            }
            public function addItem(string $text)
            {
                $this->listItems[] = $text;
            }
            public function getListItems()
            {
                return $this->listItems;
            }
        };
        return $a;
    }
    public function parse(string $source) : IParseResult
    {
        $parseResult = new GeneralParseResult();

        //$doc = new ParsedDocument();
        $doc = $this->createObject();

        $this->source = $source;

        $html = $this->getHtmlElement();

        $xpath = new \DOMXPath($this->domDocument);

        // get contents of title ta
        $query = 'head/title';
        $title = $xpath->query($query, $html)->item(0)->textContent;
        $doc->setTitle($title);

        // get contents of h1 in content div
        $query = 'body/div[@class="content"]/h1';
        $h1 = $xpath->query($query, $html)->item(0)->textContent;
        $doc->setHeading($h1);

        // get li elements of list in the body
        $query = 'body/div[@class="content"]/ul/li';
        $lis = $xpath->query($query, $html);
        foreach ($lis as $li) {
            $doc->addItem($li->textContent);
        }

        $parseResult->setObject($doc);

        return $parseResult;
    }
}