<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/3/30
 * Time: 下午3:43
 */

namespace App\Admin\Controllers;


use App\Models\Manager;
use Illuminate\Http\Request;

class DefaultController extends Controller
{

    public function index(Request $request)
    {
        if ($request->session()->get('username') === null) {
            return redirect('/login.html');
        }
        return view('admin.default.index');
    }

    public function welcome()
    {
        return view('admin.default.welcome');
    }

    public function login()
    {
        return view('admin.default.login');
    }

    public function signIn(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $manager = Manager::select(['username', 'password'])->where('username', $username)->where('password', md5($password))->first()->toArray();
        if ($username === $manager['username'] && md5($password) === $manager['password']) {
            $request->session()->put('username', $username);
            return redirect('/');
        }
        return redirect('/login.html');
    }
}