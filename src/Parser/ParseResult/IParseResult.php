<?php
/**
 * Created by PhpStorm.
 * User: phoenyx
 * Date: 2019-11-26
 * Time: 15:58
 */

namespace PhoenyxStudio\Parser\ParseResult;

use PhoenyxStudio\Parser\ParseResultItemContainer\IParseResultItemContainer;
use PhoenyxStudio\Parser\ParseResultList\IParseResultList;

interface IParseResult extends IParseResultItemContainer
{
    public function addList(IParseResultList $list);
}