<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

final class AndFilter extends LogicFilter
{
    public function accept(FilterVisitorInterface $visitor)
    {
        return $visitor->visitAnd($this);
    }
}
