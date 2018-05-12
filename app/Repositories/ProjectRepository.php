<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:25
 */

namespace App\Repositories;


use App\Models\Project;

class ProjectRepository implements Repository
{

    private $project;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }
}