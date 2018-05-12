<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/14
 * Time: 下午10:54
 */

namespace App\Presenters;


abstract class FormatPresenter implements Presenter
{

    abstract public static function formatDate(int $time);

    abstract public static function formatTime(int $time);

    abstract public static function formatDateTime(int $time);

    public static function formatImgUrl(string $url, string $cron, string $defaultUrl) {

    }
}