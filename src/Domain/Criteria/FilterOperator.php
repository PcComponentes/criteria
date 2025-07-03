<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

use PcComponentes\Ddd\Domain\Model\ValueObject\EnumValueObject;

final class FilterOperator extends EnumValueObject
{
    public const EQUAL = '=';
    public const GT = '>';
    public const GTE = 'GREATER_THAN_OR_EQUAL';
    public const LT = '<';
    public const LTE = 'LESS_THAN_OR_EQUAL';
    public const CONTAINS = 'CONTAINS';
    public const CONTAINS_NON_SENSITIVE = 'CONTAINS_NON_SENSITIVE';
    public const IN = 'IN';
    public const NOT_IN = 'NOT IN';
    public const NOT_EQUAL = 'NOT EQUAL';
    public const IS_NULL = 'IS NULL';
    public const IS_NOT_NULL = 'IS NOT NULL';

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
