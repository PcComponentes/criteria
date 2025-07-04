<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

final readonly class Filter implements FilterInterface
{
    public function __construct(
        private FilterField $field,
        private FilterOperator $operator,
        private FilterValueInterface $value,
    ) {
        self::assertConsistency($operator, $value);
    }

    public static function from(string $field, string $operator, string|int|array|null $value = null): self
    {
        if (null === $value) {
            return new self(
                FilterField::from($field),
                FilterOperator::from($operator),
                FilterValue::from(''),
            );
        }

        if (\is_int($value)) {
            return new self(
                FilterField::from($field),
                FilterOperator::from($operator),
                FilterIntValue::from($value),
            );
        }

        if (\is_array($value)) {
            return new self(
                FilterField::from($field),
                FilterOperator::from($operator),
                FilterArrayValue::from($value),
            );
        }

        return new self(
            FilterField::from($field),
            FilterOperator::from($operator),
            FilterValue::from($value),
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

    private static function assertConsistency(FilterOperator $operator, FilterValueInterface $value): void
    {
        $isArrayOperator = \in_array($operator->value(), [FilterOperator::IN, FilterOperator::NOT_IN], true);

        if ($value instanceof FilterArrayValue && false === $isArrayOperator) {
            throw new \Exception('Operator must be IN or NOT IN for array values');
        }

        $isNullOperator = \in_array($operator->value(), [FilterOperator::IS_NULL, FilterOperator::IS_NOT_NULL], true);

        if ($isNullOperator && '' !== $value->value()) {
            throw new \Exception('Null operator must not have a value, expected empty value');
        }
    }
}
