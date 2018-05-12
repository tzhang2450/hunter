<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:25
 */

namespace App\Http\Controllers\V1;


use Illuminate\Http\Request;

class VitaeController extends Controller
{

    public function index(Request $request)
    {
        $this->sendGet(function () use ($request) {
            return $this->detail();
        });
    }

    public function set(Request $request)
    {
        $this->sendPost(function () use ($request) {
            return $this->reply();
        });
    }

    private function detail()
    {
        return $this->sendJson([]);
    }

    private function reply()
    {
        return $this->sendJson([]);
    }
}