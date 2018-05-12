<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/8
 * Time: 下午4:01
 */

namespace App\Middleware;



class VerifyCsrfToken
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'api/*'
    ];
}