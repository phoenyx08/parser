<?php
/**
 * Created by PhpStorm.
 * User: phoenyx
 * Date: 2019-11-26
 * Time: 16:30
 */
namespace PhoenyxStudio\Parser\ParseResultListItem;

interface IParseResultListItem
{
    public function fromObject(stdClass $object);
}