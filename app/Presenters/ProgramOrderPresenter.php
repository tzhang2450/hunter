<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/5/11
 * Time: 下午7:22
 */

namespace App\Presenters;


use App\Models\ProgramOrder;

class ProgramOrderPresenter implements Presenter
{
    private $programOrder;

    public function __construct(ProgramOrder $programOrder)
    {
        $this->programOrder = $programOrder;
    }
}