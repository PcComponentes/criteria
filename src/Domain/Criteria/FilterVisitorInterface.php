<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

interface FilterVisitorInterface
{
    public function visitAnd(AndFilter $filter);

    public function visitOr(OrFilter $filter);

    public function visitFilter(Filter $filter);
}
