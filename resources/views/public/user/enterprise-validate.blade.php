@extends("public.layout.normal")

@section("style")
    <link rel="stylesheet" type="text/css" href="/css/user-center.css">
    <link rel="stylesheet" type="text/css" href="/css/enterprise.css">
@endsection

@section("content")
    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                @include("public.user.enterprise-menu")

                <main class="col-md-10 main-content">
                    <div class="row insidepage">
                        <h4 class="font-lg padding-30 padding-bottom-20">企业认证</h4>
                        <div class="warning">
                            <div class="alert alert-warning alert-dismissible font-sm" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="glyphicon glyphicon-exclamation-sign"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！
                            </div>
                        </div>

                        <form id="edit-profile" class="form-horizontal padding-lr-30">

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>企业全称</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入企业全称">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>法人代表</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入法人代表名称">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>注册资本</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入企业注册资本">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>类型（同营业执照一致）</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                        <option>请选择类型</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>住所（同营业执照一致）</label>
                                <div class="col-xs-12 col-sm-6 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入住所">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>社会统一信用代码</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入社会统一信用代码">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>法人代表手机号码</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入法人代表手机号码">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>上传营业执照</label>
                                <div class="col-xs-12 col-sm-9 controls">
                                    <a class="btn btn-default" href=""><i class="glyphicon glyphicon-plus-sign"></i>上传营业执照（需原件扫描）</a>
                                    <input type="hidden" class="input-medium id-frontend">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="hidden-xs col-sm-3 text-center"></label>
                                <div class="col-xs-12 col-sm-9 controls">
                                    <button type="submit" class="btn btn-blue btn-lg btn-save font-sm">保存信息</button>
                                </div>
                            </div> <!-- /form-actions -->
                        </form>
                    </div>

                </main>
            </div>
        </div>
    </section>
@endsection
@section("self-script")
    <script type="text/javascript" src="/js/user/enterprise/validate.js"></script>
@endsection