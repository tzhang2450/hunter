<?php

/**
 * 前端路由
*/

//页面路由
$app->group([
    'namespace' => 'App\Http\Controllers',
], function ($app) {
    $app->get('/', ['uses' => 'DefaultController@index']);
    $app->get('/index', ['uses' => 'DefaultController@index']);
    $app->get('/index.html', ['uses' => 'DefaultController@index']);
    $app->get('/user/person.html', ['uses' => 'UserController@person']);
    $app->get('/user/person-file.html', ['uses' => 'UserController@personFile']);
    $app->get('/user/person-validate.html', ['uses' => 'UserController@personValidate']);
    $app->get('/user/person-safe.html', ['uses' => 'UserController@personSafe']);
    $app->get('/user/person-resume.html', ['uses' => 'UserController@personResume']);
    $app->get('/user/person-offer.html', ['uses' => 'UserController@personOffer']);
    $app->get('/user/person-job.html', ['uses' => 'UserController@personJob']);
    $app->get('/user/person-favor.html', ['uses' => 'UserController@personFavor']);
    $app->get('/user/enterprise.html', ['uses' => 'UserController@enterprise']);
    $app->get('/user/enterprise-job.html', ['uses' => 'UserController@enterpriseJob']);
    $app->get('/user/enterprise-pub-job.html', ['uses' => 'UserController@enterprisePubJob']);
    $app->get('/user/enterprise-appeal.html', ['uses' => 'UserController@enterpriseAppeal']);
    $app->get('/user/enterprise-appeal-detail.html', ['uses' => 'UserController@enterpriseAppealDetail']);
    $app->get('/user/enterprise-resume.html', ['uses' => 'UserController@enterpriseResume']);
    $app->get('/user/enterprise-validate.html', ['uses' => 'UserController@enterpriseValidate']);
    $app->get('/user/enterprise-file.html', ['uses' => 'UserController@enterpriseFile']);
    $app->get('/user/enterprise-safe.html', ['uses' => 'UserController@enterpriseSafe']);
    $app->get('/user/enterprise-favor.html', ['uses' => 'UserController@enterpriseFavor']);
    $app->get('/user/service.html', ['uses' => 'UserController@service']);
    $app->get('/user/service-file.html', ['uses' => 'UserController@serviceFile']);
    $app->get('/user/service-validate.html', ['uses' => 'UserController@serviceValidate']);
    $app->get('/user/service-safe.html', ['uses' => 'UserController@serviceSafe']);
    $app->get('/user/service-manage.html', ['uses' => 'UserController@serviceManage']);
    $app->get('/user/service-appeal.html', ['uses' => 'UserController@serviceAppeal']);
    $app->get('/user/service-appeal-detail.html', ['uses' => 'UserController@serviceAppealDetail']);
    $app->get('/user/service-info.html', ['uses' => 'UserController@serviceInfo']);
    $app->get('/user/service-case.html', ['uses' => 'UserController@serviceCase']);
    $app->get('/user/service-policy.html', ['uses' => 'UserController@servicePolicy']);
    $app->get('/user/service-pub-news.html', ['uses' => 'UserController@servicePubNews']);
});


//接口路由
$app->group([
    'namespace' => 'App\Http\Controllers\V1'
], function ($app) {
    //user
    $app->get('/v1/user/index', ['uses' => 'UserController@index']);
    $app->post('v1/user/rock', ['uses' => 'UserController@rock']);

    //person
    $app->get('/v1/person/index', ['uses' => 'PersonController@index']);
    $app->post('v1/person/rock', ['uses' => 'PersonController@rock']);

    //company
    $app->get('/v1/company/index', ['uses' => 'CompanyController@index']);
    $app->post('/v1/company/rock', ['uses' => 'CompanyController@rock']);

    //upload
    $app->post('/v1/upload', ['uses' => 'UploadController@index']);
});

