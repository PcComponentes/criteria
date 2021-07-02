<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

use PcComponentes\Ddd\Domain\Model\ValueObject\EnumValueObject;

final class FilterOperator extends EnumValueObject
{
    const EQUAL    = '=';
    const GT       = '>';
    const GTE       = '>=';
    const LT       = '<';
    const LTE       = '<=';
    const CONTAINS = 'CONTAINS';
    const IN = 'IN';
    const NOT_IN = 'NOT IN';
    const NOT_EQUAL = 'NOT EQUAL';
    const IS_NULL = 'IS NULL';
    const IS_NOT_NULL = 'IS NOT NULL';
}
