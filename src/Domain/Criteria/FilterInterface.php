<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

interface FilterInterface
{
    public function accept(FilterVisitorInterface $visitor);
}
