<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:58
 */

namespace App\Presenters;


use App\Models\Program;

class ProgramPresenter implements Presenter
{

    private $program;

    public function __construct(Program $program)
    {
        $this->program = $program;
    }
}