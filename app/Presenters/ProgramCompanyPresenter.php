<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:59
 */

namespace App\Presenters;


use App\Models\ProgramCompany;

class ProgramCompanyPresenter implements Presenter
{

    private $programCompany;

    public function __construct(ProgramCompany $programCompany)
    {
        $this->programCompany = $programCompany;
    }
}