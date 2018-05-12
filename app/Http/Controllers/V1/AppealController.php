<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:27
 */

namespace App\Http\Controllers\V1;


use Illuminate\Http\Request;

class AppealController extends Controller
{

    protected function get($key, array $params = []) {
        //
    }

    protected function set($key, array $params = [])
    {

    }

    private function appeals()
    {
        return $this->sendJson([]);
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