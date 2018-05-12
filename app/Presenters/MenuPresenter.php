<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:53
 */

namespace App\Presenters;


use App\Models\Menu;

class MenuPresenter implements Presenter
{

    private $menu;

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }
}