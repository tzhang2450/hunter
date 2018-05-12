<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午9:03
 */

namespace App\Presenters;


use App\Models\Project;

class ProjectPresenter implements Presenter
{

    private $project;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }
}