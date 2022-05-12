<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

use Assert\Assert;
use PcComponentes\Ddd\Domain\Model\ValueObject\CollectionValueObject;

final class Sorting extends CollectionValueObject
{
    /**
     * @param Order[] $items
     */
    public static function from(array $items): static
    {
        Assert::that($items)->all()->isInstanceOf(Order::class);

        return parent::from($items);
    }

    public static function create(Order...$items): self
    {
        return parent::from($items);
    }
}
