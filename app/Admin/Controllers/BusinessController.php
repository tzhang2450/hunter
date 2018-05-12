<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:40
 */

namespace App\Admin\Controllers;


class BusinessController extends Controller
{

    public function index()
    {
        return view('admin.business.index');
    }
}