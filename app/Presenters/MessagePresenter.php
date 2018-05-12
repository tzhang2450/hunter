<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:53
 */

namespace App\Presenters;


use App\Models\Message;

class MessagePresenter implements Presenter
{

    private $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }
}