<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:26
 */

namespace App\Repositories;


use App\Models\Resume;

class ResumeRepository implements Repository
{

    private $resume;

    public function __construct(Resume $resume)
    {
        $this->resume = $resume;
    }
}