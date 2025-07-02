<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

interface FilterVisitorInterface
{
    public function visitAnd(Logic\AndFilter $filter);

    public function visitOr(Logic\OrFilter $filter);

    public function visitFilter(Filter $filter);
}
