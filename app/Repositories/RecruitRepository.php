<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:25
 */

namespace App\Repositories;


use App\Models\Recruit;

class RecruitRepository implements Repository
{

    private $recruit;

    public function __construct(Recruit $recruit)
    {
        $this->recruit = $recruit;
    }
}