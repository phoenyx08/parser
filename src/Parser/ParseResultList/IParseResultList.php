<?php
/**
 * Created by PhpStorm.
 * User: phoenyx
 * Date: 2019-11-26
 * Time: 16:19
 */
namespace PhoenyxStudio\Parser\ParseResultList;

use PhoenyxStudio\Parser\ParseResultListItem\IParseResultListItem;

interface IParseResultList
{
    public function addItem(IParseResultListItem $item);
}