<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/18/20
 * Time: 1:17 AM
 */

namespace App\QueryFilters;


class MaxCount extends Filter
{
    public function applyFilter($builder){
        return $builder->take(request($this->filterName()));
    }

}