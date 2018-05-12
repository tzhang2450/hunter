<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/5/12
 * Time: 上午11:35
 */

namespace App\Admin\Controllers;


use App\Models\News;
use App\Models\Offer;
use App\Models\Recruit;
use App\Models\Resume;

class RecruitController extends Controller
{

    public function index($status = null)
    {
        $query = Recruit::select(['title', 'company_id', 'num', 'created_at', 'status']);
        $total = Recruit::count();
        if ($status) {
            $query = $query->where('status', $status);
            $total = Recruit::where('status', $status)->count();
        }
        $recruitList = $query->orderBy('id', 'desc')->paginate();

        return view('admin.recruit.index', ['recruitList' => $recruitList, 'total' => $total]);
    }

    public function resume($status = null)
    {
        $query = Resume::select(['person_id', 'job_intention_id', 'created_at']);
        $total = Resume::count();
        if ($status) {
            $query = $query->where('status', $status);
            $total = Resume::where('status', $status)->count();
        }
        $resumeList = $query->orderBy('id', 'desc')->paginate(10);

        return view('admin.recruit.resume', ['resumeList' => $resumeList, 'total' => $total]);
    }

    public function news($type = 2)
    {
        $newsList = News::select(['title', 'status', 'publish_time'])->where('type', $type)->orderBy('id', 'desc')->paginate(10);
        $total = News::where('type', $type)->count();
        return view('admin.recruit.news', ['type' => $type, 'newsList' => $newsList, 'total' => $total]);
    }

    public function offer($type = null)
    {
        $offerList = Offer::select(['person_id', 'company_id', 'resume_id', 'recruit_id'])->where('type', $type)->orderBy('id', 'desc')->paginate();
        $total = Offer::where('type', $type)->count();
        return view('admin.recruit.offer', ['type' => $type, 'offerList' => $offerList, 'total' => $total]);
    }
}