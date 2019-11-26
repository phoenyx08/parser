<?php
/**
 * Created by PhpStorm.
 * User: phoenyx
 * Date: 2019-11-26
 * Time: 21:57
 */
namespace PhoenyxStudio\Parser\ParseResultItemContainer;

use PhoenyxStudio\Parser\ParseResultList\IParseResultListItem;

interface IParseResultItemContainer
{
    public function addItem(IParseResultListItem $item);
}