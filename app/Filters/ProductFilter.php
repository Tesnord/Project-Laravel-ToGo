<?php
namespace App\Filters;

class ProductFilter extends QueryFilter
{
    public function brandLetter($letter)
    {
        return $this->builder->where('brand', $letter);
    }
}
