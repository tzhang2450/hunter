<?php

namespace App\Admin\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $cookieDomain = 'perton.me';

    protected function sendJson()
    {
        return [];
    }

    protected function sendGet($callback)
    {
        try {
            $callback();
        } catch(\Exception $e) {
            var_dump($e);exit;
        }
    }

    protected function sendPost($callback)
    {
        try {
            $callback();
        } catch(\Exception $e) {
            var_dump($e);exit;
        }
    }
}
