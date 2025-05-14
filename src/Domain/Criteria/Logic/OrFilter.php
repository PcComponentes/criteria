<?php

namespace Pccomponentes\Criteria\Domain\Criteria\Logic;

use Pccomponentes\Criteria\Domain\Criteria\FilterVisitorInterface;

final class OrFilter extends Filter
{
    public function accept(FilterVisitorInterface $visitor)
    {
        return $visitor->visitOr($this);
    }
}
