<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:24
 */

namespace App\Repositories;


use App\Models\Program;

class ProgramRepository implements Repository
{

    private $program;

    public function __construct(Program $program)
    {
        $this->program = $program;
    }
}