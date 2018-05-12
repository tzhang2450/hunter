<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/14
 * Time: 下午11:47
 */

namespace App\Presenters;

use App\Models\Area;


class AreaPresenter implements Presenter
{

    public static function getArea($id)
    {
        return Area::find($id)->name;
    }
}