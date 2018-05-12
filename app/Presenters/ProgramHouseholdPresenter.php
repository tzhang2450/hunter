<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午9:00
 */

namespace App\Presenters;


use App\Models\ProgramHousehold;

class ProgramHouseholdPresenter implements Presenter
{

    private $programHousehold;

    public function __construct(ProgramHousehold $programHousehold)
    {
        $this->programHousehold = $programHousehold;
    }
}