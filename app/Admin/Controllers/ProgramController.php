<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/5/12
 * Time: 上午1:50
 */

namespace App\Admin\Controllers;


use App\Models\Program;
use App\Models\ProgramOrder;

class ProgramController extends Controller
{

    public function index()
    {
        $programList = Program::select(['title', 'phone', 'industry_id', 'companies'])->where('status', 1)->orderBy('id', 'desc')->paginate(10);
        $total= Program::where('status', 1)->count();
        return view('admin.program.index', ['programList' => $programList, 'total' => $total]);
    }

    public function order()
    {
        $orderList = ProgramOrder::select(['program_id', 'name', 'mobile', 'appoint_time', 'remark'])->orderBy('id', 'desc')->paginate(10);
        $total = ProgramOrder::count();
        return view('admin.program.order', ['orderList' => $orderList, 'total' => $total]);
    }
}