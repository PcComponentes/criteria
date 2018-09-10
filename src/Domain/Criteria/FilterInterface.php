<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

interface FilterInterface
{
    public function accept(FilterVisitorInterface $visitor);
}
