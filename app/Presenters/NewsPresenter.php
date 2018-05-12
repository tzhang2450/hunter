<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:54
 */

namespace App\Presenters;


use App\Models\News;

class NewsPresenter implements Presenter
{

    private $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }
}