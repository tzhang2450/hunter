<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:38
 */

namespace App\Admin\Controllers;


class ManagerController extends Controller
{

    public function index()
    {
        return view('admin.manage.index');
    }
}