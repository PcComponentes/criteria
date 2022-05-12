<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

class Criteria
{
    private $filters;
    private $sorting;
    private $offset;
    private $limit;

    public function __construct(Filters $filters, ?Sorting $sorting, ?int $offset, ?int $limit)
    {
        $this->filters = $filters;
        $this->sorting = $sorting ?? Sorting::create();
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function from(Filters $filters, ?Sorting $sorting, ?int $offset, ?int $limit): self
    {
        return new self($filters, $sorting, $offset, $limit);
    }

    public function hasFilters(): bool
    {
        return $this->filters->count() > 0;
    }

    public function hasSorting(): bool
    {
        return false === $this->sorting->isEmpty();
    }

    public function filters(): Filters
    {
        return $this->filters;
    }

    public function sorting(): Sorting
    {
        return $this->sorting;
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
