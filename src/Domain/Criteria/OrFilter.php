<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

final class OrFilter extends LogicFilter
{
    public function accept(FilterVisitorInterface $visitor)
    {
        return $visitor->visitOr($this);
    }
}
