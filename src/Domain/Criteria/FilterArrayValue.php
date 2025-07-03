<?php
declare(strict_types=1);

namespace Pccomponentes\Criteria\Domain\Criteria;

use PcComponentes\Ddd\Domain\Model\ValueObject\CollectionValueObject;

final class FilterArrayValue extends CollectionValueObject implements FilterValueInterface
{
    public function value(): array
    {
        return $this->jsonSerialize();
    }
}
