<?php

namespace PhoenyxStudio\Parser\ParseResult;

use PhoenyxStudio\Parser\ParseResultList\IParseResultList;

interface IParseResult
{
    public function addList(IParseResultList $list) : int;
}
