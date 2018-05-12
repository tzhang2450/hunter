<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/12
 * Time: 上午9:26
 */

namespace App\Services;


use App\Repositories\Repository;

abstract class BasicService
{

    protected $repository;

    protected function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }
}