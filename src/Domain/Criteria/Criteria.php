<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

class Criteria
{
    private $filters;
    private $order;
    private $offset;
    private $limit;

    public function __construct(Filters $filters, ?Order $order, ?int $offset, ?int $limit)
    {
        $this->filters = $filters;
        $this->order = $order;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function from(Filters $filters, ?Order $order, ?int $offset, ?int $limit): self
    {
        return new self($filters, $order, $offset, $limit);
    }

    public function hasFilters(): bool
    {
        return $this->filters->count() > 0;
    }

    public function hasOrder()
    {
        return null !== $this->order;
    }

    public function filters(): Filters
    {
        return $this->filters;
    }

    public function order(): ?Order
    {
        return $this->order;
    }

    public function offset(): ?int
    {
        return $this->offset;
    }

    public function limit(): ?int
    {
        return $this->limit;
    }
}
