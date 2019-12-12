<?php

namespace PhoenyxStudio\Parser\ParseResult;

use PhoenyxStudio\Parser\ParseResultItemContainer\GeneralParseResultItemContainer;
use PhoenyxStudio\Parser\ParseResultList\IParseResultList;

class GeneralParseResult extends GeneralParseResultItemContainer implements IParseResult
{
    protected $lists;

    protected $object;

    public function addList(IParseResultList $list) : int
    {
        if ($this->lists === null) {
            $newElementKey = 0;
        } else {
            $keys = array_keys($this->lists);
            if (!empty($keys)) {
                $latestElementKey = $keys[count($keys) - 1];
                $newElementKey = $latestElementKey + 1;
            }
            /**
             * for PHP >=7.3 we will use the following way instead of code above
             * $newElementKey = array_key_last($this->lists) + 1;
             */
        }
        $this->lists[$newElementKey] = $list;
        return $newElementKey;
    }

    public function getListByIndex($index): IParseResultList
    {
        return $this->lists[$index];
    }

    public function setObject(object $object)
    {
        $this->object = $object;
    }

    public function ejectObject(): object
    {
        return $this->object;
    }
}