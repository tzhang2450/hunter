@extends("public.layout.normal")

@section("style")
    <link rel="stylesheet" type="text/css" href="/css/person.css">
    @endsection

    @section("content")
            <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                @include("public.user.person-menu")

                <main class="col-md-10 main-content">
                    <div class="row authentication insidepage">
                        <h4 class="font-lg padding-30 padding-bottom-20">个人资料</h4>
                        <div class="warning">
                            <div class="alert alert-warning alert-dismissible font-sm" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="glyphicon glyphicon-exclamation-sign"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！
                            </div>
                        </div>

                        <form id="edit-profile" class="form-horizontal padding-lr-30">

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>真实姓名</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="真实姓名">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>身份证正面</label>
                                <div class="col-xs-12 col-sm-9 controls">
                                    <a class="btn btn-default" href=""><i class="glyphicon glyphicon-plus-sign"></i>上传身份证正面</a>
                                    <input type="hidden" class="input-medium id-frontend">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>身份证背面</label>
                                <div class="col-xs-12 col-sm-9 controls">
                                    <a class="btn btn-default" href=""><i class="glyphicon glyphicon-plus-sign"></i>上传身份证背面</a>
                                    <input type="hidden" class="input-medium id-backend">
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
    <script type="text/javascript" src="/js/user/person/validate.js"></script>
@endsection