<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:50
 */

namespace App\Presenters;


use App\Models\Favor;

class FavorPresenter implements Presenter
{

    private $favor;

    public function __construct(Favor $favor)
    {
        $this->favor = $favor;
    }
}