<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

use PcComponentes\Ddd\Domain\Model\ValueObject\EnumValueObject;

final class FilterOperator extends EnumValueObject
{
    const EQUAL = '=';
    const GT = '>';
    const GTE = 'GREATER_THAN_OR_EQUAL';
    const LT = '<';
    const LTE = 'LESS_THAN_OR_EQUAL';
    const CONTAINS = 'CONTAINS';
    const CONTAINS_NON_SENSITIVE = 'CONTAINS_NON_SENSITIVE';
    const IN = 'IN';
    const NOT_IN = 'NOT IN';
    const NOT_EQUAL = 'NOT EQUAL';
    const IS_NULL = 'IS NULL';
    const IS_NOT_NULL = 'IS NOT NULL';

    public static function fromEqual(): self
    {
        return self::from(self::EQUAL);
    }

    public static function fromGreaterThan(): self
    {
        return self::from(self::GT);
    }

    public static function fromGreaterThanOrEqual(): self
    {
        return self::from(self::GTE);
    }

    public static function fromLessThan(): self
    {
        return self::from(self::LT);
    }

    public static function fromLessThanOrEqual(): self
    {
        return self::from(self::LTE);
    }

    public static function fromContains(): self
    {
        return self::from(self::CONTAINS);
    }

    public static function fromIn(): self
    {
        return self::from(self::IN);
    }

    public static function fromNotIn(): self
    {
        return self::from(self::NOT_IN);
    }

    public static function fromNotEqual(): self
    {
        return self::from(self::NOT_EQUAL);
    }

    public static function fromIsNull(): self
    {
        return self::from(self::IS_NULL);
    }

    public static function fromIsNotNull(): self
    {
        return self::from(self::IS_NOT_NULL);
    }
}
