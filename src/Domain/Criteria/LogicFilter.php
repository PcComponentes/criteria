<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

/**
 * @deprecated use Pccomponentes\Criteria\Domain\Criteria/Logic/Filter instead
 */
abstract class LogicFilter implements FilterInterface
{
    private $left;
    private $right;

    public function __construct(FilterInterface $left, FilterInterface $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function left(): FilterInterface
    {
        return $this->left;
    }

    public function right(): FilterInterface
    {
        return $this->right;
    }
}
