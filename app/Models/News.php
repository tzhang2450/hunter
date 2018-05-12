<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/6
 * Time: 上午1:01
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $connect = 'hunter';

    protected $table = 'ht_news';

    protected $primaryKey = 'id';

    protected $images = [];

    protected $guarded = ['id'];

    public $timestamp = true;

    public static function formatAll($newsList)
    {
        $results = [];
        foreach ($newsList as $news) {
            $results[] = self::format($news);
        }
        return $results;
    }

    public static function format($news)
    {
        return [
            'id' => $news->id,
            'title' => $news->title,
            'desc' => $news->desc,
            'content' => $news->content
        ];
    }
}