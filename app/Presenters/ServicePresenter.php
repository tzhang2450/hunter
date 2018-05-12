<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午9:08
 */

namespace App\Presenters;


use App\Models\Service;

class ServicePresenter implements Presenter
{

    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}