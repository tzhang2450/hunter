<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:39
 */

namespace App\Admin\Controllers;


class MenuController extends Controller
{

    public function index()
    {
        return view('admin.menu.index');
    }
}