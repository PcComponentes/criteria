<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

final class NullValueFilter implements FilterInterface
{
    private $field;
    private $operator;

    public function __construct(FilterField $field, FilterOperator $operator)
    {
        $this->field = $field;

        if (false === \in_array($operator, [FilterOperator::IS_NULL, FilterOperator::IS_NOT_NULL])) {
            throw new \InvalidArgumentException("This filter does not accept an invalid operator");
        }
        $this->operator = $operator;
    }

    public function field(): FilterField
    {
        return $this->field;
    }

    public function operator(): FilterOperator
    {
        return $this->operator;
    }

    public function accept(FilterVisitorInterface $visitor)
    {
        return $visitor->visitFilter($this);
    }
}
