<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/5/9
 * Time: 下午11:39
 */

namespace App\Http\Controllers;


use Laravel\Lumen\Routing\Controller;

class UserController extends Controller
{

    public function person()
    {
        return view('public.user.person', ['menu' => 'index']);
    }

    public function personFile()
    {
        return view('public.user.person-file', ['menu' => 'file']);
    }

    public function personValidate()
    {
        return view('public.user.person-validate', ['menu' => 'validate']);
    }

    public function personSafe()
    {
        return view('public.user.person-safe', ['menu' => 'safe']);
    }

    public function personResume()
    {
        return view('public.user.person-resume', ['menu' => 'resume']);
    }

    public function personOffer()
    {
        return view('public.user.person-offer', ['menu' => 'offer']);
    }

    public function personJob()
    {
        return view('public.user.person-job', ['menu' => 'job']);
    }

    public function personFavor()
    {
        return view('public.user.person-favor', ['menu' => 'favor']);
    }

    public function enterprise()
    {
        return view('public.user.enterprise', ['menu' => 'index']);
    }

    public function enterpriseFile()
    {
        return view('public.user.enterprise-file', ['menu' => 'file']);
    }

    public function enterpriseFavor()
    {
        return view('public.user.enterprise-favor', ['menu' => 'favor']);
    }

    public function enterpriseValidate()
    {
        return view('public.user.enterprise-validate', ['menu' => 'validate']);
    }

    public function enterpriseSafe()
    {
        return view('public.user.enterprise-safe', ['menu' => 'safe']);
    }

    public function enterpriseResume()
    {
        return view('public.user.enterprise-resume', ['menu' => 'resume']);
    }

    public function enterpriseAppeal()
    {
        return view('public.user.enterprise-appeal', ['menu' => 'appeal']);
    }

    public function enterpriseAppealDetail()
    {
        return view('public.user.enterprise-appeal-detail', ['menu' => 'appeal']);
    }

    public function enterpriseJob()
    {
        return view('public.user.enterprise-job', ['menu' => 'job']);
    }

    public function enterprisePubJob()
    {
        return view('public.user.enterprise-pub-job', ['menu' => 'job']);
    }

    public function service()
    {
        return view('public.user.service', ['menu' => 'index']);
    }

    public function serviceFile()
    {
        return view('public.user.service-file', ['menu' => 'file']);
    }

    public function serviceValidate()
    {
        return view('public.user.service-validate', ['menu' => 'validate']);
    }

    public function serviceSafe()
    {
        return view('public.user.service-safe', ['menu' => 'safe']);
    }

    public function serviceManage()
    {
        return view('public.user.service-manage', ['menu' => 'manage']);
    }

    public function serviceAppeal()
    {
        return view('public.user.service-appeal', ['menu' => 'appeal']);
    }

    public function serviceAppealDetail()
    {
        return view('public.user.service-appeal-detail', ['menu' => 'appeal']);
    }

    public function serviceInfo()
    {
        return view('public.user.service-info', ['menu' => 'info']);
    }

    public function serviceCase()
    {
        return view('public.user.service-case', ['menu' => 'case']);
    }

    public function servicePolicy()
    {
        return view('public.user.service-policy', ['menu' => 'policy']);
    }

    public function servicePubNews()
    {
        return view('public.user.service-pub-news', ['menu' => 'policy']);
    }
}