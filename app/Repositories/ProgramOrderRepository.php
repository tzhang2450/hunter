<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/5/11
 * Time: 下午7:24
 */

namespace App\Repositories;


use App\Models\ProgramOrder;

class ProgramOrderRepository implements Repository
{
    private $programOrder;

    public function __construct(ProgramOrder $programOrder)
    {
        $this->programOrder = $programOrder;
    }

}