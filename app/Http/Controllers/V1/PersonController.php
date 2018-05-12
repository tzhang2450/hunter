<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/17
 * Time: 上午9:09
 */

namespace App\Http\Controllers\V1;


use App\Presenters\PersonPresenter;
use App\Repositories\PersonRepository;
use App\Services\PersonService;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class PersonController extends Controller
{

    public function __construct(PersonPresenter $presenter, PersonRepository $repository, PersonService $service)
    {
        parent::__construct($presenter, $repository, $service);
    }

    protected function get($key, array $params = null)
    {
        if ($params === null || !array_key_exists('_token', $params)) {
            throw new AccessDeniedException('参数错误', 403);
        }

        $params['user_id'] = Redis::get($params['_token']);
        if (!$params['user_id']) {
            throw new AccessDeniedException('用户未登录', 403);
        }
        switch ($key) {
            case 'preview' : return $this->preview($params);break;//预览
            case 'profile' : return $this->profile($params);break;//资料
            case 'resume' : return $this->resume($params);break;//简历
            case 'offer_list' : return $this->inviteList($params);break;//面试要约
            case 'view_resume_list' : return $this->viewResumeList($params);break;
            case 'favor_list' : return $this->viewResumeList($params);break;//收藏职位
            default : return $this->def();break;
        }
    }



    protected function set($key, array $params = null)
    {
        if ($params === null || !array_key_exists('_token', $params)) {
            throw new AccessDeniedException('参数错误', 403);
        }

        $params['user_id'] = Redis::get($params['_token']);
        if (!$params['user_id']) {
            throw new AccessDeniedException('用户未登录', 403);
        }
        unset($params['_token']);

        switch ($key) {
            case 'save_file' : return $this->saveFile($params);break;
            case 'save_resume' : return $this->saveResume($params);break;
            case 'delete_invite' : return $this->deleteInvite($params);break;
            default : return $this->def();break;
        }
    }

    private function profile(array $params = null)
    {
        $columns = ['id', 'name', 'gender', 'birthday', 'education', 'province', 'city', 'area', 'address', 'experience', 'mobile', 'avatar', 'email', 'nation', 'marriage', 'qq'];
        $results = $this->service->getPersonProfileByUserId($params['user_id'], $columns);
        $data = $this->presenter->format($results, $columns);
        return $this->sendJson($data);
    }

    private function saveFile(array $params = null)
    {
        $this->service->saveCompanyProfile($params);
        return $this->sendJson([]);
    }
}