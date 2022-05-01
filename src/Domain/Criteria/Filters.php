<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

use Assert\Assert;
use PcComponentes\Ddd\Domain\Model\ValueObject\CollectionValueObject;

final class Filters extends CollectionValueObject
{
    /**
     * @param FilterInterface[] $items
     */
    public static function from(array $items): self
    {
        Assert::that($items)->all()->isInstanceOf(FilterInterface::class);

        return parent::from($items);
    }

    public static function create(FilterInterface...$items): self
    {
        return parent::from($items);
    }
}
