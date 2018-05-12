<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/12
 * Time: 上午9:29
 */

namespace App\Services;


use App\Repositories\AppealRepository;

class AppealService extends BasicService
{

    public function __construct(AppealRepository $repository)
    {
        parent::__construct($repository);
    }
    /**前台业务**/
    /***************************************分隔线**************************************************/
    /**后台业务**/
}