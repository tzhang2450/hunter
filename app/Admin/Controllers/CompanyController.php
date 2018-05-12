<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:36
 */

namespace App\Admin\Controllers;


class CompanyController extends Controller
{

    public function index()
    {
        return view('admin.company.index');
    }
}