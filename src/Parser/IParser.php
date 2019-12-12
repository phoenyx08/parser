<?php

namespace PhoenyxStudio\Parser;

use PhoenyxStudio\Parser\ParseResult\IParseResult;

interface IParser
{
    public function parse(string $html) : IParseResult;

    public function ejectObject() : stdClass;
}