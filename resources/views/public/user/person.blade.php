@extends("public.layout.normal")

@section("style")
    <link rel="stylesheet" type="text/css" href="/css/person.css" />
    <link rel="stylesheet" type="text/css" href="/css/person-index.css" />
@endsection

@section("content")
<!-- start site's main content area -->
<section class="content-wrap">
    <div class="container">
        <div class="row">
            @include("public.user.person-menu")

            <main class="col-md-10 main-content">
                <div class="row padding-30 base-info">
                    <div class="col-md-8">
                        <div class="col-md-12 user-info">
                            <div class="col-md-2 avatar">
                                <img src="">
                            </div>
                            <div class="col-md-9 info">
                                <div>上午好~ <span class="email-info font-lg"></span></div>
                                <div>
                                    <span><i class="glyphicon glyphicon-phone"></i><span class="validate mobile-validate mr10"></span></span>
                                    <span><i class="glyphicon glyphicon-envelope"></i><span class="validate email-validate mr10"></span></span>
                                    <span><i class="glyphicon glyphicon-user"></i><span class="validate identity-validate"></span></span>
                                </div>
                                <div>
                                    <span><a class="font-xs" href="">修改个人信息 →</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 validate-operator">
                        <div class="row">
                            <a class="btn btn-success btn-lg font-sm" href="">个人用户认证</a>
                        </div>
                        <div class="hidden-xs warning">
                            <div class="alert alert-warning alert-dismissible font-sm">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                提示：认证增强可信度，得到更优质服务
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row padding-30 hunt-manage">
                    <h4 class="font-lg title">求职管理</h4>
                    <div class="col-md-12 hunter-content">
                        <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                            <div class="font-md">面试邀约</div>
                            <div class="num"><a href="">0</a></div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                            <div class="font-md">求职申请</div>
                            <div class="num"><a href="">0</a></div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                            <div class="font-md">收藏职位</div>
                            <div class="num"><a href="">0</a></div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                            <div class="font-md">谁看了我的简历</div>
                            <div class="num"><a href="">0</a></div>
                        </div>
                    </div>
                </div>

                <div class="row padding-30 view-resume">
                    <div class="row mb0">
                        <div class="col-xs-6 col-sm-5">
                            <div class="col-xs-7 col-sm-3"><h4 class="font-lg">我的简历</h4></div>
                            <div class="col-xs-5 col-sm-9"><button class="btn btn-xs btn-success-blank">简历已审核</button></div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-8">
                            <div class="row resume-status">
                                <span class="view-times font-xs">被浏览：<span>0</span>次 </span>
                                <span class="update-time font-xs">更新时间：<span></span></span>
                            </div>
                            <div class="row resume-detail">

                            </div>
                        </div>
                        <div class="col-sm-4 right">
                            <div class="view-button">
                                <div class="row">
                                    <a class="btn btn-orange btn-lg edit font-sm" href="">编辑简历</a>
                                    <a class="btn btn-orange btn-lg view font-sm" href="">预览简历</a>
                                </div>
                            </div>
                            <div class="hidden-xs warning">
                                <div class="alert alert-warning alert-dismissible font-sm" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    提示：完善简历信息，以提高就职成功率
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row padding-30 update-resume">
                    <div>
                        <span class="font-bg common-tip">您还有以下资料没有填写</span>
                        <span class="font-xs detail-tip">（为了更快的找到工作，建议您立即完善简历！）</span>
                    </div>
                    <div class="operator">
                        <a class="btn btn-lightblue btn-lg" href=""><i class="glyphicon glyphicon-plus"></i>求职意向</a>
                        <a class="btn btn-lightblue btn-lg" href=""><i class="glyphicon glyphicon-plus"></i>工作经历</a>
                        <a class="btn btn-lightblue btn-lg" href=""><i class="glyphicon glyphicon-plus"></i>教育经历</a>
                        <a class="btn btn-lightblue btn-lg" href=""><i class="glyphicon glyphicon-plus"></i>自我评价</a>
                    </div>
                </div>

                <div class="row recommend-resume">
                    <h4 class="font-lg padding-30 padding-bottom-20">也许适合你的岗位</h4>
                    <div class="list-body-box">
                        <div class="table">
                            <div class="hidden-xs list-title row mb0">
                                <div class="col-sm-5">
                                    <div class="row chackbox20-total">
                                        <div class="col-xs-1 col-sm-1">
                                            <label class="mb0">
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                        <div class="col-xs-11 col-sm-11 font-list-title">公司名称</div>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="row mb0">
                                        <div class="col-xs-4 col-sm-4 font-list-title">薪资待遇</div>
                                        <div class="col-xs-3 col-sm-3 font-list-title">工作地点</div>
                                        <div class="col-xs-3 col-sm-3 font-list-title">招聘状态</div>
                                        <div class="col-xs-2 col-sm-2 font-list-title">操作</div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden-sm hidden-md hidden-lg list-title row mb0">
                                <div class="row chackbox20-total">
                                    <div class="col-xs-1 col-sm-1">
                                        <label class="mb0">
                                            <input type="checkbox">
                                        </label>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 font-list-title">岗位 / 公司名称</div>
                                    <div class="col-xs-3 col-sm-3 font-list-title">工作地点</div>
                                    <div class="col-xs-2 col-sm-2 font-list-title">招聘状态</div>
                                    <div class="col-xs-2 col-sm-2 font-list-title">操作</div>
                                </div>
                            </div>

                            <div class="list-body-l2">

                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
</section>
@endsection
@section("self-script")
    <script type="text/javascript" src="/js/user/person/index.js"></script>
@endsection
