<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //due to mass assignment
        protected $guarded=[];

        public function imageable(){
            return $this->morphTo();
        }
}
