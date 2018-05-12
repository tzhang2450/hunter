<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:26
 */

namespace App\Http\Controllers\V1;


use App\Models\News;

class NewsController extends Controller
{

    protected function get($key, array $params = [])
    {
        //
    }

    protected function set($key, array $params = [])
    {
        //
    }

    private function getList($type, $page, $pageSize)
    {
        $newsList = News::select()->where('type', $type)->where('status', 1)->forPage($page, $pageSize)->sortByDesc('id')->get();
        $results = News::formatAll($newsList);
        return $this->sendJson($results);
    }

    private function getDetail($id)
    {
        $news = News::select()->where('id', $id)->first();
        $result = News::format($news);
        return $this->sendJson($result);
    }
}