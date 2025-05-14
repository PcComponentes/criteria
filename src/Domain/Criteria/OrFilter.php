<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

/**
 * @deprecated use Pccomponentes\Criteria\Domain\Criteria/Logic/OrFilter instead
 */
final class OrFilter extends LogicFilter
{
    public function accept(FilterVisitorInterface $visitor)
    {
        return $visitor->visitOr($this);
    }
}
