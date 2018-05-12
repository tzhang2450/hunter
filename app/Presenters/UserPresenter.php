<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午9:09
 */

namespace App\Presenters;


use App\Models\User;

class UserPresenter implements Presenter
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }


}