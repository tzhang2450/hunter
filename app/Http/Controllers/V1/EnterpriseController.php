<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/3
 * Time: 上午7:29
 */

namespace App\Http\Controllers\V1;


use Illuminate\Http\Request;

class EnterpriseController extends Controller
{

    public function index(Request $request)
    {

        $this->sendGet(function() use ($request) {
            return $this->detail();
        });
    }

    protected function get($key, array $params = [])
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

    protected function set($key, array $params = [])
    {
        switch ($key) {
            case 'save_file' : return $this->saveFile($params);break;
            case 'save_validate' : return $this->saveValidate($params);break;
            case 'save_job' : return $this->saveJob($params);break;
            case 'appeal_reply' : return $this->appealReply($params);break;
            default : return $this->def();break;
        }
    }

    private function detail()
    {
        return $this->sendJson([]);
    }

    private function recruit()
    {
        return $this->sendJson([]);
    }
}