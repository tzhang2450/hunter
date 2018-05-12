<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:17
 */

namespace App\Repositories;


use App\Models\Manager;

class ManagerRepository implements Repository
{

    private $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }
}