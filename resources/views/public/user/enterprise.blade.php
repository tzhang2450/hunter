@extends("public.layout.normal")

@section("style")
    <link rel="stylesheet" type="text/css" href="/css/user-center.css">
    <link rel="stylesheet" type="text/css" href="/css/enterprise.css">
    <link rel="stylesheet" type="text/css" href="/css/enterprise-index.css">
@endsection

@section("content")
    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                @include("public.user.enterprise-menu")

                <main class="col-md-10 main-content">
                    <div class="row padding-30 base-info">
                        <div class="col-md-8">
                            <div class="col-md-12 user-info">
                                <div class="col-md-2 avatar">
                                    <img src="/images/1.png">
                                </div>
                                <div class="col-md-9 info">
                                    <div><i class="hidden-xs">上午好~ </i><span class="email-info"></span></div>
                                    <div class="validate-status">
                                        <span><i class="glyphicon glyphicon-phone"></i><span class="validate mobile-validate mr10"></span></span>
                                        <span><i class="glyphicon glyphicon-envelope"></i><span class="validate email-validate mr10"></span></span>
                                        <span><i class="glyphicon glyphicon-user"></i><span class="validate identity-validate"></span></span>
                                    </div>
                                    <div class="validate-edit">
                                        <span><a class="font-xs" href="">修改企业资料信息 →</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 validate-operator">
                            <div class="row">
                                <a class="btn btn-success btn-lg font-sm" href="">营业执照认证</a>
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
                        <h4 class="font-lg title">招聘管理</h4>
                        <div class="col-md-12 hunter-content">
                            <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                                <div class="font-md">发布职位</div>
                                <div class="num"><a href="">0</a></div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                                <div class="font-md">收到简历</div>
                                <div class="num"><a href="">0</a></div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                                <div class="font-md">邀请面试</div>
                                <div class="num"><a href="">0</a></div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                                <div class="font-md">收藏人才</div>
                                <div class="num"><a href="">0</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="row jobs-manage">
                        <h4 class="font-lg padding-30 padding-bottom-20">职位管理</h4>
                        <div class="list-body-box">
                            <div class="table">
                                <div class="hidden-xs list-title row mb0">
                                    <div class="col-sm-5">
                                        <div class="row chackbox20-total">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-11 font-list-title">岗位名称(人数)</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="row mb0">
                                            <div class="col-sm-4 font-list-title">薪资待遇</div>
                                            <div class="col-sm-3 font-list-title">发布时间</div>
                                            <div class="col-sm-3 font-list-title">状态</div>
                                            <div class="col-sm-2 font-list-title">操作</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden-sm hidden-md hidden-lg list-title row mb0">
                                    <div class="row chackbox20-total">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4 font-list-title">岗位名称(人数)</div>
                                        <div class="col-xs-3 font-list-title font-">发布时间</div>
                                        <div class="col-xs-2 font-list-title">状态</div>
                                        <div class="col-xs-2 font-list-title">操作</div>
                                    </div>
                                </div>

                                <div class="list-body-l1">
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0 chackbox">
                                                <div class="col-xs-1 col-sm-1"></div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">区拓经理/区拓代表<small> （2人）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">¥5000-10000</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line check-pass">审核通过</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">详情</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0 chackbox20">
                                                <div class="col-xs-1 col-sm-1"></div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">客户服务体验金管理<small> （20人）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">¥5000-10000</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line check-notpass">审核未过</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">详情</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0 chackbox20">
                                                <div class="col-xs-1 col-sm-1"></div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">用户体验工程师<small> （1人）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">¥5000-10000</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line check-wait">审核中</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">详情</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0 chackbox20">
                                                <div class="col-xs-1 col-sm-1"></div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">自动机床维护工程师<small> （若干）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">¥5000-10000</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line check-wait">审核中</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">详情</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row resume-matching">
                        <h4 class="font-lg padding-30 padding-bottom-20">简历速配</h4>
                        <div class="resume-body-box">
                            <div class="table">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="row resumebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="/images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-bg" href="">孙立红1</a></h4>
                                                <div class="info font-sm">贵州 / 大专 / 4年以上经验</div>
                                                <div class="info font-sm">意向职位：<i>美容/健身/体育</i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row resumebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="/images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-bg" href="">孙立红2</a></h4>
                                                <div class="info font-sm">贵州 / 大专 / 4年以上经验</div>
                                                <div class="info font-sm">意向职位：<i>美容/健身/体育</i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row resumebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="/images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-bg" href="">孙立红3</a></h4>
                                                <div class="info font-sm">贵州 / 大专 / 4年以上经验</div>
                                                <div class="info font-sm">意向职位：<i>美容/健身/体育</i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row resumebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="/images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-bg" href="">孙立红4</a></h4>
                                                <div class="info font-sm">贵州 / 大专 / 4年以上经验</div>
                                                <div class="info font-sm">意向职位：<i>美容/健身/体育</i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row resumebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="/images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-bg" href="">孙立红5</a></h4>
                                                <div class="info font-sm">贵州 / 大专 / 4年以上经验</div>
                                                <div class="info font-sm">意向职位：<i>美容/健身/体育</i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row resumebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="/images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-bg" href="">孙立红6</a></h4>
                                                <div class="info font-sm">贵州 / 大专 / 4年以上经验</div>
                                                <div class="info font-sm">意向职位：<i>美容/健身/体育</i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row resumebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="/images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-bg" href="">孙立红7</a></h4>
                                                <div class="info font-sm">贵州 / 大专 / 4年以上经验</div>
                                                <div class="info font-sm">意向职位：<i>美容/健身/体育</i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row resumebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="/images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-bg" href="">孙立红8</a></h4>
                                                <div class="info font-sm">贵州 / 大专 / 4年以上经验</div>
                                                <div class="info font-sm">意向职位：<i>美容/健身/体育</i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row resumebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="/images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-bg" href="">孙立红9</a></h4>
                                                <div class="info font-sm">贵州 / 大专 / 4年以上经验</div>
                                                <div class="info font-sm">意向职位：<i>美容/健身/体育</i></div>
                                            </div>
                                        </div>
                                    </div>
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
    <script type="text/javascript" src="/js/user/enterprise/index.js"></script>
@endsection
