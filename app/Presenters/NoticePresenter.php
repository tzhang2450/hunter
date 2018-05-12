<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:55
 */

namespace App\Presenters;


use App\Models\Notice;

class NoticePresenter implements Presenter
{

    private $notice;

    public function __construct(Notice $notice)
    {
        $this->notice = $notice;
    }
}