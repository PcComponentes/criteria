<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

use Pccomponentes\Ddd\Domain\Model\ValueObject\EnumValueObject;

final class OrderType extends EnumValueObject
{
    const ASC = 'asc';
    const DESC = 'desc';
}
