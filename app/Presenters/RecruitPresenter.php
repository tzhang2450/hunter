<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午9:04
 */

namespace App\Presenters;


use App\Models\Recruit;

class RecruitPresenter implements Presenter
{

    private $recruit;

    public function __construct(Recruit $recruit)
    {
        $this->recruit = $recruit;
    }
}