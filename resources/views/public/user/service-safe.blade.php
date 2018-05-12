@extends("public.layout.normal")

@section("style")
    <link rel="stylesheet" type="text/css" href="/css/user-center.css">
    <link rel="stylesheet" type="text/css" href="/css/service.css">
    <link rel="stylesheet" type="text/css" href="/css/service-index.css">
    <link rel="stylesheet" type="text/css" href="/css/service-safe.css">
@endsection

@section("content")
    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                @include("public.user.service-menu")

                <main class="col-md-10 main-content">
                    <div class="row insidepage pb100">
                        <h4 class="font-lg padding-30 padding-bottom-20">安全中心</h4>
                        <div class="warning">
                            <div class="alert alert-warning alert-dismissible font-sm" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="glyphicon glyphicon-exclamation-sign"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！
                            </div>
                        </div>

                        <div class="row mb0 safetycenter">
                            <div class="col-xs-2 col-sm-1 safety-icon">
                                <i class="glyphicon icon-credit-card"></i>
                            </div>
                            <div class="col-xs-7 col-sm-9">
                                <div class="safety-info">
                                    <h4 class="font-bg title-main">账户修改</h4>
                                    <div class="font-sm title-sub">您有一次修改账户名机会（仅限一次）</div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-2 safety-btn">
                                <div class="row">
                                    <a class="btn btn-safety-service btn-lg font-sm" href="">修改</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb0 safetycenter">
                            <div class="col-xs-2 col-sm-1 safety-icon">
                                <i class="glyphicon icon-key"></i>
                            </div>
                            <div class="col-xs-7 col-sm-9">
                                <div class="safety-info">
                                    <h4 class="font-bg title-main">修改密码</h4>
                                    <div class="font-sm title-sub">用户保护账号信息和登录安全</div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-2 safety-btn">
                                <div class="row">
                                    <a class="btn btn-safety-service btn-lg font-sm" href="">修改</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb0 safetycenter">
                            <div class="col-xs-2 col-sm-1 safety-icon">
                                <i class="glyphicon icon-envelope-alt"></i>
                            </div>
                            <div class="col-xs-7 col-sm-9">
                                <div class="safety-info">
                                    <h4 class="font-bg title-main">安全邮箱 714552765@qq.com<span><i class="glyphicon glyphicon-exclamation-sign"></i>未验证</span></h4>
                                    <div class="font-sm title-sub title-orange">安全邮箱将可用于登录账号和重置密码，建议立即设置</div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-2 safety-btn">
                                <div class="row">
                                    <a class="btn btn-safety-service btn-lg font-sm" href="">验证</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb0 safetycenter">
                            <div class="col-xs-2 col-sm-1 safety-icon">
                                <i class="glyphicon glyphicon-phone"></i>
                            </div>
                            <div class="col-xs-7 col-sm-9">
                                <div class="safety-info">
                                    <h4 class="font-bg title-main">安全手机 18746287648<span><i class="glyphicon glyphicon-exclamation-sign"></i>未验证</span></h4>
                                    <div class="font-sm title-sub title-orange">安全手机将可用于登录账号和重置密码、接收短信提醒等功能，建议立即设置</div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-2 safety-btn">
                                <div class="row">
                                    <a class="btn btn-safety-service btn-lg font-sm" href="">验证</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb0 safetycenter">
                            <div class="col-xs-2 col-sm-1 safety-icon">
                                <i class="glyphicon icon-eye-open"></i>
                            </div>
                            <div class="col-xs-7 col-sm-9">
                                <div class="safety-info">
                                    <h4 class="font-bg title-main">营业执照认证<span><i class="glyphicon glyphicon-exclamation-sign"></i>未认证</span></h4>
                                    <div class="font-sm title-sub title-orange">营业执照认证增加企业信你的信任度</div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-2 safety-btn">
                                <div class="row">
                                    <a class="btn btn-safety-service btn-lg font-sm" href="">认证</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb0 safetycenter">
                            <div class="col-xs-2 col-sm-1 safety-icon">
                                <i class="glyphicon icon-eye-open"></i>
                            </div>
                            <div class="col-xs-7 col-sm-9">
                                <div class="safety-info">
                                    <h4 class="font-bg title-main">服务资质认证<span><i class="glyphicon glyphicon-exclamation-sign"></i>未认证</span></h4>
                                    <div class="font-sm title-sub title-orange">服务资质认证增加企业信你的信任度</div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-2 safety-btn">
                                <div class="row">
                                    <a class="btn btn-safety-service btn-lg font-sm" href="">认证</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb0 safetycenter">
                            <div class="col-xs-2 col-sm-1 safety-icon">
                                <i class="glyphicon icon-comments"></i>
                            </div>
                            <div class="col-xs-7 col-sm-9">
                                <div class="safety-info">
                                    <h4 class="font-bg title-main">绑定微信<span><i class="glyphicon glyphicon-exclamation-sign"></i>未绑定</span></h4>
                                    <div class="font-sm title-sub">授权绑定后，可使用微信扫描登录</div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-2 safety-btn">
                                <div class="row">
                                    <a class="btn btn-safety-service btn-lg font-sm" href="">绑定</a>
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
    <script type="text/javascript" src="/js/user/service/safe.js"></script>
@endsection