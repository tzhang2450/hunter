<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:19
 */

namespace App\Repositories;


use App\Models\Menu;

class MenuRepository implements Repository
{

    private $menu;

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }
}