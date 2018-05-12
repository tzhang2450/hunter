<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:37
 */

namespace App\Admin\Controllers;


class ServiceController extends Controller
{

    public function index()
    {
        return view('admin.service.index');
    }
}