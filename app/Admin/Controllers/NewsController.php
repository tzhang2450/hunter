<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:38
 */

namespace App\Admin\Controllers;


use App\Models\News;

class NewsController extends Controller
{

    public function index($type)
    {
        $newsList = News::select(['title', 'company_id', 'status', 'pulish_time'])->where('type', $type)->orderBy('id', 'desc')->paginate(10);
        $total = News::where('type', $type)->count();
        return view('admin.news.index', ['type' => $type, 'newsList' => $newsList, 'total' => $total]);
    }
}