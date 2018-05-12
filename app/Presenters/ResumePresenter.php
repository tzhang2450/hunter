<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午9:05
 */

namespace App\Presenters;


use App\Models\Resume;

class ResumePresenter implements Presenter
{

    private $resume;

    public function __construct(Resume $resume)
    {
        $this->resume = $resume;
    }
}