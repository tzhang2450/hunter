<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:12
 */

namespace App\Repositories;


use App\Models\Career;

class CareerRepository implements Repository
{

    private $career;

    public function __construct(Career $career)
    {
        $this->career = $career;
    }
}