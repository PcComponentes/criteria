<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

class Criteria
{
    private Sorting $sorting;

    public function __construct(private Filters $filters, ?Sorting $sorting, private ?int $offset, private ?int $limit)
    {
        $this->sorting = $sorting ?? Sorting::create();
    }

    public static function from(
        Filters $filters,
        ?Sorting $sorting = null,
        ?int $offset = null,
        ?int $limit = null,
    ): self {
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
