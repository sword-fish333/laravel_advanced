<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/18/20
 * Time: 12:55 AM
 */
namespace  App\QueryFilters;
use Closure;
class Sort extends Filter
{
        public function applyFilter($builder)
        {
            // TODO: Implement applyFilter() method.
            return    $builder->orderBy('title',request($this->filterName()));
        }
}