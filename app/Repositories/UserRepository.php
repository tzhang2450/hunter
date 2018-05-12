<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:27
 */

namespace App\Repositories;


use App\Models\User;

class UserRepository implements Repository
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUserByUsername($where)
    {
        return $this->user->where($where['key'], $where['operator'], $where['value'])->first();
    }
}