<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午9:09
 */

namespace App\Presenters;


use App\Models\ServiceType;

class ServiceTypePresenter implements Presenter
{

    private $serviceType;

    public function __construct(ServiceType $serviceType)
    {
        $this->serviceType = $serviceType;
    }
}