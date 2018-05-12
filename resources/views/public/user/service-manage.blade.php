@extends("public.layout.normal")

@section("style")
    <link rel="stylesheet" type="text/css" href="/css/user-center.css">
    <link rel="stylesheet" type="text/css" href="/css/service.css">
    <link rel="stylesheet" type="text/css" href="/css/service-index.css">
    <link rel="stylesheet" type="text/css" href="/css/service-manage.css">
@endsection

@section("content")
    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                @include("public.user.service-menu")

                <main class="col-md-10 main-content">
                    <div class="row insidepage pb50">
                        <h4 class="font-lg padding-30 padding-bottom-20">服务管理</h4>
                        <div class="warning">
                            <div class="alert alert-warning alert-dismissible font-sm" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="glyphicon glyphicon-exclamation-sign"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！
                            </div>
                        </div>

                        <div class="list-body-box">
                            <div class="table">
                                <div class="hidden-xs list-title row mb0">
                                    <div class="col-sm-4">
                                        <div class="row chackbox20-total">
                                            <div class="col-xs-1 col-sm-1"></div>
                                            <div class="col-xs-11 col-sm-11 font-list-title">服务项目大类</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row mb0">
                                            <div class="col-sm-12 font-list-title">请选择贵公司能提供的服务（可多选）</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden-sm hidden-md hidden-lg list-title row mb0">
                                    <div class="row chackbox20-total">
                                        <div class="col-xs-1 col-sm-1"></div>
                                        <div class="col-xs-11 font-list-title">请选择贵公司能提供的服务（可多选）</div>
                                    </div>
                                </div>

                                <div class="list-body-service">

                                    <div class="row mb0 bb1 service-box">
                                        <div class="col-sm-4">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1"></div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">一级服务项目A</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row mb0 service2">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" value="option1">  二级服务项目1
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option2">  二级服务项目2
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox3" value="option3">  二级服务项目3
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" value="option1">  二级服务项目4
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option2">  二级服务项目5
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox3" value="option3">  二级服务项目6
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" value="option1">  二级服务项目7
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1 service-box">
                                        <div class="col-sm-4">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1"></div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">一级服务项目B</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row mb0 service2">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" value="option1">  二级服务项目1
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option2">  二级服务项目2
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox3" value="option3">  二级服务项目3
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" value="option1">  二级服务项目4
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option2">  二级服务项目5
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox3" value="option3">  二级服务项目6
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" value="option1">  二级服务项目7
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1 service-box">
                                        <div class="col-sm-4">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1"></div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">一级服务项目C</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row mb0 service2">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" value="option1">  二级服务项目1
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option2">  二级服务项目2
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox3" value="option3">  二级服务项目3
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" value="option1">  二级服务项目4
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option2">  二级服务项目5
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox3" value="option3">  二级服务项目6
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" value="option1">  二级服务项目7
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="padding-lr-30">
                                <div class="row control-group">
                                    <label class="hidden-xs col-sm-3 text-center"></label>
                                    <div class="col-xs-12 col-sm-9 controls">
                                        <button type="submit" class="btn btn-blue btn-lg btn-save font-bg">保存信息</button>
                                    </div>
                                </div> <!-- /form-actions -->
                            </div>
                        </div>

                    </div>
                </main>

            </div>
        </div>
    </section>
@endsection
@section("self-script")
    <script type="text/javascript" src="/js/user/service/manage.js"></script>
@endsection