<?php

namespace PhoenyxStudio\Parser;

use PhoenyxStudio\Parser\ParseResultItemContainer\IParseResult;

interface IParser
{
    public function parse(string $html) : IParseResult;
}