<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:46
 */

namespace App\Presenters;


use App\Models\Career;

class CareerPresenter implements Presenter
{

    private $career;

    public function __construct(Career $career)
    {
        $this->career = $career;
    }
}