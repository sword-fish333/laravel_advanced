<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/18/20
 * Time: 12:55 AM
 */
namespace  App\QueryFilters;
use Closure;
class Active extends Filter
{

    public function applyFilter($builder)
    {
        return $builder->where($this->filterName(),request($this->filterName()));
    }
}