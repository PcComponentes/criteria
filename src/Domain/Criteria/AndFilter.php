<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

/**
 * @deprecated use Pccomponentes\Criteria\Domain\Criteria/Logic/AndFilter instead
 */
final class AndFilter extends LogicFilter
{
    public function accept(FilterVisitorInterface $visitor)
    {
        return $visitor->visitAnd($this);
    }
}
