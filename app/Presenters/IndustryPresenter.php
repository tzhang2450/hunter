<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午12:11
 */

namespace App\Presenters;


use App\Models\Industry;

class IndustryPresenter implements Presenter
{

    public static function getIndustry($id)
    {
        return Industry::find($id)->name;
    }
}