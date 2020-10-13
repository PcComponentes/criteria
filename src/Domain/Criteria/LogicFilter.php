<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

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
