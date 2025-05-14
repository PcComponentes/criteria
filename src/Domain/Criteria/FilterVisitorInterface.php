<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

use Pccomponentes\Criteria\Domain\Criteria\Logic as Logic;

interface FilterVisitorInterface
{
    public function visitAnd(AndFilter|Logic\AndFilter $filter);

    public function visitOr(OrFilter|Logic\OrFilter $filter);

    public function visitFilter(Filter $filter);
}
