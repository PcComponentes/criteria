<?php

namespace Pccomponentes\Criteria\Domain\Criteria;

abstract class LogicFilter implements FilterInterface
{
    private $left;
    private $right;

    public function __construct(Filter $left, Filter $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function left(): Filter
    {
        return $this->left;
    }

    public function right(): Filter
    {
        return $this->right;
    }
}
