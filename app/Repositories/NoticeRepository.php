<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:21
 */

namespace App\Repositories;


use App\Models\Notice;

class NoticeRepository
{

    private $notice;

    public function __construct(Notice $notice)
    {
        $this->notice = $notice;
    }
}