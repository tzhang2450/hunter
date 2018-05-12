<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午12:20
 */

namespace App\Presenters;


use App\Models\EmployScope;

class EmployScopePresenter implements Presenter
{

    public static function getEmployScope($code)
    {
        return EmployScope::where('code', '=', $code)->first()->value;
    }
}