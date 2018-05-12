<?php
/**
 * 用户相关服务
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/12
 * Time: 上午9:28
 */

namespace App\Services;


use App\Models\Person;
use App\Models\User;
use App\Repositories\UserRepository;

class UserService extends BasicService
{
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }
    /**前台业务**/
    /**
     * 根据用户名和密码查找用户
     * @param $username
     * @return mixed
     */
    public function getUserByUsername($username)
    {
        $where = [
            'key' => 'username',
            'operator' => '=',
            'value' => $username
        ];
        return $this->repository->getUserByUsername($where);
    }
    /***************************************分隔线**************************************************/
    /**后台业务**/
    /**
     * 用户列表
     */
    public static function getUserListByCondition(array $where, $columns = ['*'])
    {
        $type = $where['type'];
        $userList = User::select($columns)->where('type', $type)->orderBy('id', 'desc')->paginate(10);
        $total = User::where('type', $type)->count();
    }
}