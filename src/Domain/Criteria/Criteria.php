<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

class Criteria
{
    private $filters;
    private $order;
    private $sorting;
    private $offset;
    private $limit;

    public function __construct(Filters $filters, $sorting, ?int $offset, ?int $limit)
    {
        if ($sorting instanceof Order || null === $sorting) {
            @trigger_error(
                'Field type Order is deprecated, use Pccomponentes\Criteria\Domain\Criteria\Sorting instead',
                E_USER_DEPRECATED,
            );
            $this->order = $sorting;
            $this->sorting = Sorting::from([]);
        } elseif ($sorting instanceof Sorting) {
            $this->order = null;
            $this->sorting = $sorting;
        } else {
            throw new \InvalidArgumentException('Invalid sorting field type at: ' . __FILE__);
        }

        $this->filters = $filters;

        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function from(Filters $filters, $sorting, ?int $offset, ?int $limit): self
    {
        return new self($filters, $sorting, $offset, $limit);
    }

    public function hasFilters(): bool
    {
        return $this->filters->count() > 0;
    }

    /**
     * @deprecated use sorting instead, variable order will be removed
     */
    public function hasOrder(): bool
    {
        @trigger_error(
            'Field type Order is deprecated, use Pccomponentes\Criteria\Domain\Criteria\Sorting instead',
            E_USER_DEPRECATED,
        );
        return null !== $this->order || false === $this->sorting->isEmpty();
    }

    public function hasSorting(): bool
    {
        return null !== $this->order || false === $this->sorting->isEmpty();
    }

    public function filters(): Filters
    {
        return $this->filters;
    }

    /**
     * @deprecated use sorting instead, variable order will be removed
     */
    public function order(): ?Order
    {
        @trigger_error(
            'Field type Order is deprecated, use Pccomponentes\Criteria\Domain\Criteria\Sorting instead',
            E_USER_DEPRECATED,
        );
        return $this->order;
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
