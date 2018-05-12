<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午12:32
 */

namespace App\Repositories;


use App\Models\Benefits;

class BenefitsRepository implements Repository
{

    private $benefits;

    public function __construct(Benefits $benefits)
    {
        $this->benefits = $benefits;
    }

    public function getAllBenefits()
    {
        return $this->benefits->get(['name']);
    }

    public function getBenefits($str)
    {
        $arr = explode(',', $str);
        return $this->benefits->where('code', 'in', $arr)->get(['name']);
    }
}