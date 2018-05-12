<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/14
 * Time: 下午4:18
 */

namespace App\Http\Controllers\V1;


use App\Presenters\CompanyPresenter;
use App\Repositories\CompanyRepository;
use App\Services\CompanyService;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class CompanyController extends Controller
{

    public function __construct(CompanyPresenter $presenter, CompanyRepository $repository, CompanyService $service)
    {
        parent::__construct($presenter, $repository, $service);
    }



    protected function get($key, array $params = null)
    {
        switch ($key) {
            case 'preview' : return $this->preview($params);break;//预览
            case 'profile' : return $this->profile($params);break;//企业资料
            case 'validate' : return $this->validate($params);break;//企业认证
            case 'job_list' : return $this->jobList($params);break;//企业认证
            case 'job' : return $this->job($params);break;//企业认证
            case 'offer_list' : return $this->job($params);break;//招聘
            case 'appeal_list' : return $this->job($params);break;//诉求列表
            case 'appeal' : return $this->job($params);break;//诉求
            default : return $this->def();break;
        }
    }



    protected function set($key, array $params = null)
    {
        switch ($key) {
            case 'save_file' : return $this->saveFile($params);break;
            case 'save_validate' : return $this->saveValidate($params);break;
            case 'save_job' : return $this->saveJob($params);break;
            case 'appeal_reply' : return $this->appealReply($params);break;
            default : return $this->def();break;
        }
    }

    private function profile(array $params = null)
    {
        if ($params === null || !array_key_exists('user_id', $params)) {
            throw new AccessDeniedException('参数错误', 403);
        }
        $columns = ['id', 'name', 'industry_id', 'code', 'employ_scope', 'province', 'city', 'area', 'address', 'contact', 'mobile', 'logo', 'email', 'phone', 'found', 'description', 'honor', 'benefits'];
        $results = $this->service->getCompanyProfileByUserId($params['user_id'], $columns);
        $data = $this->presenter->format($results, $columns);
        return $this->sendJson($data);
    }

    private function saveFile(array $params = null)
    {
        $id = $params['id'];
        $this->service->saveCompanyProfile($id, $params);
    }
}