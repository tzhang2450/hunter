@extends("public.layout.normal")

@section("style")
    <link rel="stylesheet" type="text/css" href="/css/user-center.css">
    <link rel="stylesheet" type="text/css" href="/css/service.css">
    <link rel="stylesheet" type="text/css" href="/css/service-index.css">
@endsection

@section("content")
    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                @include("public.user.service-menu")

                <main class="col-md-10 main-content">
                    <div class="row padding-30 base-info">
                        <div class="col-md-8">
                            <div class="col-md-12 user-info">
                                <div class="col-md-2 avatar">
                                    <img src="">
                                </div>
                                <div class="col-md-9 info">
                                    <div><i class="hidden-xs">上午好~ </i><span class="email-info"></span></div>
                                    <div class="validate-status">
                                        <span><i class="glyphicon glyphicon-phone"></i><span class="validate mobile-validate mr10"></span></span>
                                        <span><i class="glyphicon glyphicon-envelope"></i><span class="validate email-validate mr10"></span></span>
                                        <span><i class="glyphicon glyphicon-user"></i><span class="validate identity-validate"></span></span>
                                    </div>
                                    <div class="validate-edit">
                                        <span><a class="font-xs" href="">修改机构资料信息 →</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 validate-operator">
                            <div class="row">
                                <a class="btn btn-success btn-lg font-sm mr10" href="">营业执照认证</a>
                                <a class="btn btn-success btn-lg font-sm" href="">服务资质认证</a>
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
                        <h4 class="font-lg title">服务管理</h4>
                        <div class="col-md-12 hunter-content">
                            <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                                <div class="font-md">提供的服务</div>
                                <div class="num"><a href="">0</a></div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                                <div class="font-md">收到诉求</div>
                                <div class="num"><a href="">0</a></div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                                <div class="font-md">未回复诉求</div>
                                <div class="num"><a href="">0</a></div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
                                <div class="font-md">发布文章</div>
                                <div class="num"><a href="">0</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="row service-manage">
                        <h4 class="font-lg padding-30 padding-bottom-20">服务项目</h4>
                        <div class="service-body-box">
                            <div class="table">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="row servicebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-lg" href="">专业技术服务</a></h4>
                                                <div class="info font-sm">诉求数量：<a href="">23</a> / 未处理 <a href="">4</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row servicebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-lg" href="">战略咨询服务</a></h4>
                                                <div class="info font-sm"><i>尚未通过审核</i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row servicebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-lg" href="">财务管理咨询</a></h4>
                                                <div class="info font-sm">诉求数量：<a href="">23</a> / 未处理 <a href="">4</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row servicebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-lg" href="">企业上市财务指导</a></h4>
                                                <div class="info font-sm">诉求数量：<a href="">23</a> / 未处理 <a href="">4</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row servicebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-lg" href="">法律诉讼</a></h4>
                                                <div class="info font-sm">诉求数量：<a href="">23</a> / 未处理 <a href="">4</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row servicebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-lg" href="">专业技术服务</a></h4>
                                                <div class="info font-sm">诉求数量：<a href="">23</a> / 未处理 <a href="">4</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row servicebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-lg" href="">战略咨询服务</a></h4>
                                                <div class="info font-sm"><i>尚未通过审核</i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row servicebox">
                                            <div class="col-xs-4 col-sm-4 avatar"><img src="images/1.png"></div>
                                            <div class="col-xs-8 col-sm-8 ml-5">
                                                <h4 class="name"><a class="font-lg" href="">财务管理咨询</a></h4>
                                                <div class="info font-sm">诉求数量：<a href="">23</a> / 未处理 <a href="">4</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row appeal-manage">
                        <h4 class="font-lg padding-30 padding-bottom-20">最新服务诉求</h4>
                        <div class="list-body-box">
                            <div class="table">
                                <div class="hidden-xs list-title row mb0">
                                    <div class="col-sm-5">
                                        <div class="row chackbox20-total">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-11 font-list-title">申请诉求企业</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="row mb0">
                                            <div class="col-sm-4 font-list-title">意向服务</div>
                                            <div class="col-sm-3 font-list-title">提交时间</div>
                                            <div class="col-sm-3 font-list-title">诉求状态</div>
                                            <div class="col-sm-2 font-list-title">操作</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden-sm hidden-md hidden-lg list-title row mb0">
                                    <div class="row chackbox20-total">
                                        <div class="col-xs-1"></div>
                                        <div class="col-xs-4 font-list-title">申请诉求企业</div>
                                        <div class="col-xs-3 font-list-title font-">提交时间</div>
                                        <div class="col-xs-2 font-list-title">诉求状态</div>
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
                                                        <h4 class="font-bg title-main">杭州阿里巴电子商务有限公司1</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">财税顾问服务</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line check-pass">已回复</div>
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
                                                        <h4 class="font-bg title-main">杭州阿里巴电子商务有限公司2</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">财税顾问服务</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line check-pass">已回复</div>
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
                                                        <h4 class="font-bg title-main">杭州阿里巴电子商务有限公司3</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">企业上市财务指导</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line check-wait">未回复</div>
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
                                                        <h4 class="font-bg title-main">杭州阿里巴电子商务有限公司4</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">战略咨询服务</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line check-wait">未回复</div>
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

                </main>

            </div>
        </div>
    </section>
@endsection
@section("self-script")
    <script type="text/javascript" src="/js/user/service/index.js"></script>
@endsection
