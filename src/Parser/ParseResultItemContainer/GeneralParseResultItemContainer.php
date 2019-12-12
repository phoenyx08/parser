<?php

namespace PhoenyxStudio\Parser\ParseResultItemContainer;

use PhoenyxStudio\Parser\ParseResultList\IParseResultListItem;

class GeneralParseResultItemContainer implements IParseResultItemContainer
{
    protected $items = [];

    public function addItem(IParseResultListItem $item) : int
    {
        $newElementKey = 0;
        $keys = array_keys($this->items);
        if (!empty($keys)) {
            $latestElementKey = $keys[count($keys) - 1];
            $newElementKey = $latestElementKey + 1;
        }
        /**
         * for PHP >=7.3 we will use the following way instead of code above
         * $newElementKey = array_key_last($this->items) + 1;
         */
        $this->items[$newElementKey] = $item;
        return $newElementKey;
    }
}