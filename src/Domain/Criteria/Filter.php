<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

final class Filter implements FilterInterface
{
    private $field;
    private $operator;
    private $value;

    public function __construct(FilterField $field, FilterOperator $operator, FilterValue $value)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->value = $value;
    }

    public function field(): FilterField
    {
        return $this->field;
    }

    public function operator(): FilterOperator
    {
        return $this->operator;
    }

    public function value(): FilterValue
    {
        return $this->value;
    }

    public function accept(FilterVisitorInterface $visitor)
    {
        return $visitor->visitFilter($this);
    }
}
