<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/2/20
 * Time: 11:57 PM
 */

namespace App;


class Example
{
    protected $collaborator;

    function __construct(Collaborator $c){
        $this->collaborator=$c;

    }



}