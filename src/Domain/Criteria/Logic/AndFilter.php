<?php

namespace Pccomponentes\Criteria\Domain\Criteria\Logic;

use Pccomponentes\Criteria\Domain\Criteria\FilterVisitorInterface;

final class AndFilter extends Filter
{
    public function accept(FilterVisitorInterface $visitor)
    {
        return $visitor->visitAnd($this);
    }
}
