<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/3/30
 * Time: 下午3:43
 */

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class DefaultController extends Controller
{

    public function index()
    {
        return view('public.default.index');
    }
}