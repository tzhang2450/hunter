<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:14
 */

namespace App\Repositories;


use App\Models\Education;

class EducationRepository implements Repository
{

    private $education;

    public function __construct(Education $education)
    {
        $this->education = $education;
    }
}