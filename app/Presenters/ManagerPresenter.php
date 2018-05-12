<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:52
 */

namespace App\Presenters;


use App\Models\Manager;

class ManagerPresenter implements Presenter
{

    private $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }
}