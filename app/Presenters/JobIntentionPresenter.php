<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:51
 */

namespace App\Presenters;


use App\Models\JobIntention;

class JobIntentionPresenter implements Presenter
{

    private $intention;

    public function __construct(JobIntention $intention)
    {
        $this->intention = $intention;
    }
}