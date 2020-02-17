<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/18/20
 * Time: 1:07 AM
 */

namespace App\QueryFilters;

use Closure;
use Illuminate\Support\Str;

abstract class Filter
{
    public function handle($request,Closure $next){
        if(!request()->has($this->filterName())){
            return  $next($request);
        }
        $builder=$next($request);

        return $this->applyFilter($builder);
    }

    public abstract function applyFilter($builder);

    protected function filterName(){
     return Str::snake(class_basename($this));
    }
}