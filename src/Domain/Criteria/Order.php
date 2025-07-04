<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

final class Order
{
    private OrderBy $orderBy;
    private OrderType $orderType;

    public function __construct(OrderBy $orderBy, OrderType $orderType)
    {
        $this->orderBy = $orderBy;
        $this->orderType = $orderType;
    }

    public static function from(string $orderBy, string $orderType): self
    {
        return new self(OrderBy::from($orderBy), OrderType::from($orderType));
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
