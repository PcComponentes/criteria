<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

use Assert\Assert;
use PcComponentes\Ddd\Domain\Model\ValueObject\CollectionValueObject;

final class Filters extends CollectionValueObject
{
    public static function create(FilterInterface ...$items): self
    {
        return parent::from($items);
    }

    /** @param array<FilterInterface> $items */
    public static function from(array $items): static
    {
        Assert::that($items)->all()->isInstanceOf(FilterInterface::class);

        return parent::from($items);
    }
}
