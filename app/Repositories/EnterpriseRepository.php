<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:35
 */

namespace App\Repositories;


use App\Models\Company;

class EnterpriseRepository implements Repository
{

    private $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }
}