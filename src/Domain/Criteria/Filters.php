<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

use Pccomponentes\Ddd\Domain\Model\ValueObject\CollectionValueObject;

final class Filters extends CollectionValueObject
{
    public function __construct(FilterInterface... $items)
    {
        parent::__construct($items);
    }
}
