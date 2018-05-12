<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:16
 */

namespace App\Repositories;


use App\Models\Favor;

class FavorRepository implements Repository
{

    private $favor;

    public function __construct(Favor $favor)
    {
        $this->favor = $favor;
    }
}