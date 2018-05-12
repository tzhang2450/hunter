<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午9:10
 */

namespace App\Presenters;


use App\Models\Verify;

class VerifyPresenter implements Presenter
{

    private $verify;

    public function __construct(Verify $verify)
    {
        $this->verify = $verify;
    }
}