<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/20/20
 * Time: 12:24 PM
 */
namespace App\Repositories;

abstract class DbRepository
{
    protected $model;
    function __construct( $model)
    {
        $this->model=$model;
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }
}