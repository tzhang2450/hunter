<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:30
 */

namespace App\Repositories;


use App\Models\Verify;

class VerifyRepository implements Repository
{

    private $verify;

    public function __construct(Verify $verify)
    {
        $this->verify = $verify;
    }
}