<?php

/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:19
 */
namespace App\Http\Controllers\V1;

use App\Presenters\UserPresenter;
use App\Providers\MyJwt;
use App\Repositories\UserRepository;
use App\Services\UserService;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use \Illuminate\Support\Facades\Request;

class UserController extends Controller
{

    public function __construct(UserPresenter $presenter, UserRepository $repository, UserService $service)
    {
        parent::__construct($presenter, $repository, $service);
    }


    protected function get($key, array $params = null)
    {
        switch ($key) {
            case 'preview' : return $this->preview($params);break;
            case 'profile' : return $this->profile($params);break;
            default : return $this->def();break;
        }
    }

    protected function set($key, array $params = null)
    {
        switch ($key) {
            case 'login' : return $this->login($params);break;
            case 'logout' : return $this->logout($params);break;
            case 'register' : return $this->register($params);break;
            default : return $this->def();break;
        }
    }

    private function login(array $params = null)
    {
        if ($params === null || !array_key_exists('username', $params) || !array_key_exists('password', $params)) {
            throw new AccessDeniedException('参数错误', 403);
        }
        $results = $this->service->getUserByUsername($params['username']);
        if (!$results) {
            throw new AccessDeniedException('用户不存在', 403);
        }
        if ($results->password !== md5($params['password'])) {
            throw new AccessDeniedException('用户或密码不正确', 403);
        }

        $jwt = new MyJwt();

        $jwt->payload['uid'] = $results->id;
        $jwt->payload['role'] = $results->type;

        $token = $jwt->encode($jwt->payload, MyJwt::ENCODE_KEY, $jwt->header['alg']);

        return $this->sendJson(['_token' => $token]);
    }

    private function logout(array $params = null)
    {
        $authorization = Request::header('Authorization');
        $jwt = new MyJwt();
        $jwtCode = $jwt->decode($authorization, MyJwt::ENCODE_KEY);
        if (!array_key_exists('uid', $jwtCode) || !array_key_exists('role', $jwtCode)) {
            throw new AccessDeniedException('非法请求', 403);
        }

        return $this->sendJson(['_token' => '']);
    }

    private function register($params)
    {
        //
    }

    private function detail()
    {
        return $this->sendJson([]);
    }

    private function change()
    {
        return $this->sendJson([]);
    }

    private function preview(array $params)
    {
        if ($params === null || !array_key_exists('user_id', $params)) {
            throw new AccessDeniedException('参数错误', 403);
        }
    }

    private function profile(array $params)
    {
        if ($params === null || !array_key_exists('user_id', $params)) {
            throw new AccessDeniedException('参数错误', 403);
        }
        //`avatar`, `mobile`, `email`, `nation`, `marriage`
        $columns = ['id', 'name', 'gender', 'birthday', 'education', 'province', 'city', 'area', 'address', 'experience', 'mobile', 'avatar', 'email', 'nation', 'marriage', 'qq'];
        $results = $this->service->getPersonProfileByUserId($params['user_id'], $columns);
        $data = $this->presenter->format($results, $columns);
        return $this->sendJson($data);
        return $this->sendJson([]);
    }



}