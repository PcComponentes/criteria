<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

final class Order
{
    private $orderBy;
    private $orderType;

    public function __construct(OrderBy $orderBy, OrderType $orderType)
    {
        $this->orderBy = $orderBy;
        $this->orderType = $orderType;
    }

    public function orderBy(): OrderBy
    {
        return $this->orderBy;
    }

    public function orderType(): OrderType
    {
        return $this->orderType;
    }
}
