<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:43
 */

namespace App\Presenters;


use App\Models\Appeal;

class AppealPresenter implements Presenter
{

    private $appeal;

    public function __construct(Appeal $appeal)
    {
        $this->appeal = $appeal;
    }
}