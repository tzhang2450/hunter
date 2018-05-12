<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午9:07
 */

namespace App\Presenters;


use App\Models\Rule;

class RulePresenter implements Presenter
{

    private $rule;

    public function __construct(Rule $rule)
    {
        $this->rule = $rule;
    }
}