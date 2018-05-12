<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/12
 * Time: 上午9:34
 */

namespace App\Repositories;


use App\Models\Appeal;

class AppealRepository implements Repository
{

    private $appeal;

    public function __construct(Appeal $appeal)
    {
        $this->appeal = $appeal;
    }
}