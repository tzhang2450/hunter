<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/14
 * Time: 下午11:41
 */

namespace App\Presenters;


use App\Models\EnterpriseType;

class EnterpriseTypePresenter implements Presenter
{

    private $enterpriseType;

    public function __construct(EnterpriseType $enterpriseType)
    {
        $this->enterpriseType = $enterpriseType;
    }

    public static function getEnterpriseType($code)
    {
        return EnterpriseType::where('code', '=', $code)->first()->name;
    }
}