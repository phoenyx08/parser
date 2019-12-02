<?php

namespace PhoenyxStudio\Parser\ParseResultList;

use PhoenyxStudio\Parser\ParseResultItemContainer\GeneralParseResultItemContainer;

class GeneralParseResultList extends GeneralParseResultItemContainer implements IParseResultList
{
    protected $name;

    public function setName(string $name)
    {
        $this->name = $name;
    }
}