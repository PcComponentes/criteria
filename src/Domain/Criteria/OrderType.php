<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

use PcComponentes\Ddd\Domain\Model\ValueObject\EnumValueObject;

final class OrderType extends EnumValueObject
{
    public const ASC = 'asc';
    public const DESC = 'desc';

    public static function fromAsc(): self
    {
        return self::from(self::ASC);
    }

    public static function fromDesc(): self
    {
        return self::from(self::DESC);
    }
}
