<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:49
 */

namespace App\Presenters;


use App\Models\Evaluation;

class EvaluationPresenter implements Presenter
{

    private $evaluation;

    public function __construct(Evaluation $evaluation)
    {
        $this->evaluation = $evaluation;
    }
}