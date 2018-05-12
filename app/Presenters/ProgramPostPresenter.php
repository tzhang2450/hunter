<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午9:02
 */

namespace App\Presenters;


use App\Models\ProgramPost;

class ProgramPostPresenter implements Presenter
{

    private $programPost;

    public function __construct(ProgramPost $programPost)
    {
        $this->programPost = $programPost;
    }
}