<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

use PcComponentes\Ddd\Domain\Model\ValueObject\EnumValueObject;

final class OrderType extends EnumValueObject
{
    const ASC = 'asc';
    const DESC = 'desc';
}
