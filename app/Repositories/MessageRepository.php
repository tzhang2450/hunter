<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:20
 */

namespace App\Repositories;


use App\Models\Message;

class MessageRepository implements Repository
{

    private $messaage;

    public function __construct(Message $message)
    {
        $this->messaage = $message;
    }
}