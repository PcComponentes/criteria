<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

final class Filter implements FilterInterface
{
    private $field;
    private $operator;
    private $value;

    public function __construct(FilterField $field, FilterOperator $operator, FilterValueInterface $value)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->value = $value;
    }

    public static function from(string $field, string $operator, string|int|array $value): self
    {
        if (\is_int($value)) {
            return new self(
                FilterField::from($field),
                FilterOperator::from($operator),
                FilterIntValue::from($value)
            );
        }

        if (\is_array($value)) {
            return new self(
                FilterField::from($field),
                FilterOperator::from($operator),
                FilterArrayValue::from($value)
            );
        }

        return new self(
            FilterField::from($field),
            FilterOperator::from($operator),
            FilterValue::from($value)
        );
    }

    public function field(): FilterField
    {
        return $this->field;
    }

    public function operator(): FilterOperator
    {
        return $this->operator;
    }

    public function value(): FilterValueInterface
    {
        return $this->value;
    }

    public function accept(FilterVisitorInterface $visitor)
    {
        return $visitor->visitFilter($this);
    }
}
