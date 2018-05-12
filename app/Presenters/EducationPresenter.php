<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:48
 */

namespace App\Presenters;


use App\Models\Education;

class EducationPresenter implements Presenter
{

    private $education;

    public function __construct(Education $education)
    {
        $this->education = $education;
    }
}