<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

use Pccomponentes\Ddd\Domain\Model\ValueObject\EnumValueObject;

final class FilterOperator extends EnumValueObject
{
    const EQUAL    = '=';
    const GT       = '>';
    const LT       = '<';
    const CONTAINS = 'CONTAINS';
}
