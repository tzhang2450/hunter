<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:37
 */

namespace App\Repositories;


use App\Models\News;

class NewsRepository implements Repository
{

    private $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }
}