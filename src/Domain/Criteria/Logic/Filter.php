<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria\Logic;

use Assert\Assert;
use Pccomponentes\Criteria\Domain\Criteria\FilterInterface;
use PcComponentes\Ddd\Domain\Model\ValueObject\CollectionValueObject;

abstract class Filter extends CollectionValueObject implements FilterInterface
{
    public static function from(array $items): static
    {
        Assert::that($items)->all()->isInstanceOf(FilterInterface::class);

        return parent::from($items);
    }

    public static function create(FilterInterface ...$items): static
    {
        return parent::from($items);
    }

    public function current(): FilterInterface
    {
        return parent::current();
    }
}
