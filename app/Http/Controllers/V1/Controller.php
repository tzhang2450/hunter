<?php

namespace App\Http\Controllers\V1;

use App\Presenters\Presenter;
use App\Repositories\Repository;
use App\Services\BasicService;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{

    protected $presenter;

    protected $repository;

    protected $service;

    protected function __construct(Presenter $presenter, Repository $repository, BasicService $service)
    {
        $this->presenter = $presenter;
        $this->repository = $repository;
        $this->service = $service;
    }
    protected function sendJson(array $data, $status = 200, $message = 'OK')
    {
        echo json_encode([
            'body' => count($data) ? ['data' => $data] : new \stdClass(),
            'status' => $status,
            'message' => $message
        ]);
    }

    protected function sendGet($callback)
    {
        try {
            $callback();
        } catch(\Exception $e) {
            return $this->sendJson([], $e->getCode(), $e->getMessage());
        }

    }

    protected function sendPost($callback)
    {
        try {
            $callback();
        } catch(\Exception $e) {
            return $this->sendJson([], $e->getCode(), $e->getMessage());
        }
    }

    protected function def()
    {
        return $this->sendJson([], 403, '无效请求');
    }

//    public function index(Request $request)
//    {
//        $this->sendGet(function () use($request) {
//            $key = $request->get("key");
//            $params = $request->get("params");
//
//            return $this->get($key, $params);
//        });
//    }

    public function rock(Request $request)
    {
        $this->sendPost(function () use($request) {
            $key = $request->get("key");
            $params = $request->get("params");

            return $this->set($key, $params);
        });
    }

}
