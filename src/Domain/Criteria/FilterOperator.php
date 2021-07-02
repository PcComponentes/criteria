<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

use PcComponentes\Ddd\Domain\Model\ValueObject\EnumValueObject;

final class FilterOperator extends EnumValueObject
{
    const EQUAL    = '=';
    const GT       = '>';
    const GTE       = 'GREATER_THAN_OR_EQUAL';
    const LT       = '<';
    const LTE       = 'LESS_THAN_OR_EQUAL';
    const CONTAINS = 'CONTAINS';
    const IN = 'IN';
    const NOT_IN = 'NOT IN';
    const NOT_EQUAL = 'NOT EQUAL';
    const IS_NULL = 'IS NULL';
    const IS_NOT_NULL = 'IS NOT NULL';
}
