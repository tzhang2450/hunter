<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:35
 */

namespace App\Admin\Controllers;


use App\Models\User;

class UserController extends Controller
{

    public function index($type)
    {
        $userList = User::select(['id', 'username', 'created_at', 'status'])->where('type', $type)->orderBy('id', 'desc')->paginate(10);
        $total = User::where('type', $type)->count();
        return view('admin.user.index', ['type' => $type, 'userList' => $userList, 'total' => $total]);
    }
}