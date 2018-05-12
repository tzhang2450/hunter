<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:45
 */

namespace App\Presenters;


use App\Models\AppealReply;

class AppealReplyPresenter implements Presenter
{

    private $appealReply;

    public function __construct(AppealReply $appealReply)
    {
        $this->appealReply = $appealReply;
    }
}