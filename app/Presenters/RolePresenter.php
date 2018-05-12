<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午9:06
 */

namespace App\Presenters;


use App\Models\Role;

class RolePresenter implements Presenter
{

    private $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }
}