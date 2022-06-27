<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

use Assert\Assert;
use PcComponentes\Ddd\Domain\Model\ValueObject\CollectionValueObject;

abstract class LogicFilter extends CollectionValueObject implements FilterInterface
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
        return static::from($items);
    }
}
