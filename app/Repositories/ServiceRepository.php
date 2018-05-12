<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:29
 */

namespace App\Repositories;


use App\Models\Service;

class ServiceRepository implements Repository
{

    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}