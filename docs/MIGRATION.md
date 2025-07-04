# Migration to v2.0.0

## Breaking Changes

- feat: [Logical filters are represented as a collection, enabling developers to create logical filters containing more than two individual filters. The OR/AND operations are applied across all filters within a logical filter](https://github.com/PcComponentes/criteria/pull/27)
- feat: [Facilitate the construction of Filter](https://github.com/PcComponentes/criteria/pull/28)
- feat: [Facilitate the construction of Order](https://github.com/PcComponentes/criteria/pull/31)

## Migration Steps

### Logical filters are represented as a collection:

#### Modify your visitor:

Before (ex: SQL):

```php
    public function visitAnd(AndFilter $filter): string
    {
        return '( ' . $this->buildExpression($filter->left()) . ' AND '
            . $this->buildExpression($filter->right()) . ' )';
    }

    public function visitOr(OrFilter $filter): string
    {
        return '( ' . $this->buildExpression($filter->left()) . ' OR '
            . $this->buildExpression($filter->right()) . ' )';
    }
```

After (ex: SQL):

```php
    public function visitAnd(AndFilter $filter): string
    {
        $values = $filter->reduce(fn (array $carry, FilterInterface $item) => [
            ...$carry,
            $this->buildExpression($item),
        ], []);

        return '( ' . \implode(' AND ', $values) . ' )';
    }

    public function visitOr(OrFilter $filter): string
    {
        $values = $filter->reduce(fn (array $carry, FilterInterface $item) => [
            ...$carry,
            $this->buildExpression($item),
        ], []);

        return '( ' . \implode(' OR ', $values) . ' )';
    }
```

#### Perform global replacements:

1. Replace `Pccomponentes\Criteria\Domain\Criteria\OrFilter` with `Pccomponentes\Criteria\Domain\Criteria\Logic\OrFilter`
2. Replace `new OrFilter(` with `OrFilter::create(`
3. Replace `Pccomponentes\Criteria\Domain\Criteria\AndFilter` with `Pccomponentes\Criteria\Domain\Criteria\Logic\AndFilter`
4. Replace `new AndFilter(` with `AndFilter::create(`
5. Review your code

### Facilitate the construction of Filter:

  - Option 1 (keep last code): Replace `Filter::from(` to `new Filter(`
  - Option 2: Remove all Value Object instantiations during filter construction with `Filter::from()`.

### Facilitate the construction of Order:

  - Option 1 (keep last code): Replace `Order::from(` to `new Order(`
  - Option 2: Remove all Value Object instantiations during Order construction with `Order::from()`.
