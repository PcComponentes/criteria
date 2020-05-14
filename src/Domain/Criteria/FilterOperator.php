<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

use PcComponentes\Ddd\Domain\Model\ValueObject\EnumValueObject;

final class FilterOperator extends EnumValueObject
{
    const EQUAL    = '=';
    const GT       = '>';
    const LT       = '<';
    const CONTAINS = 'CONTAINS';
}
