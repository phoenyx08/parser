<?php

namespace PhoenyxStudio\Parser\ParseResult;

use PhoenyxStudio\Parser\ParseResultList\IParseResultList;

interface IParseResult
{
    public function addList(IParseResultList $list) : int;

    public function getListByIndex($index) : IParseResultList;

    public function setObject(object $object);

    public function ejectObject() : object;
}
