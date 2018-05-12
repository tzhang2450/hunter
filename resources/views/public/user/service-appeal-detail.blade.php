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
                    <div class="row insidepage">
                        <h4 class="font-lg padding-30 padding-bottom-20">服务诉求详情</h4>
                        <div class="warning">
                            <div class="alert alert-warning alert-dismissible font-sm" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="glyphicon glyphicon-exclamation-sign"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！
                            </div>
                        </div>

                        <form id="edit-profile" class="form-horizontal padding-lr-30">

                            <div class="row control-group appeal-group">
                                <label class="col-xs-12 col-sm-3 control-label">提交诉求时间：</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <div class="info">2018-04-12 19:29:32</div>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group appeal-group">
                                <label class="col-xs-12 col-sm-3 control-label">意向机构：</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <div class="info">贵州万隆永鼎会计师事务所</div>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group appeal-group">
                                <label class="col-xs-12 col-sm-3 control-label">意向服务：</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <div class="info">财税顾问服务</div>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group appeal-group">
                                <label class="col-xs-12 col-sm-3 control-label">提出诉求企业：</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <div class="info">贵州黎泰信息科技有限公司</div>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group appeal-group">
                                <label class="col-xs-12 col-sm-3 control-label">联系人姓名：</label>
                                <div class="col-xs-3 col-sm-2 controls mr15">
                                    <div class="info">杨虎群</div>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group appeal-group">
                                <label class="col-xs-12 col-sm-3 control-label">联系人职务：</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <div class="info">财务经理</div>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group appeal-group">
                                <label class="col-xs-12 col-sm-3 control-label">联系人电话：</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <div class="info">18976377776</div>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group appeal-group">
                                <label class="col-xs-12 col-sm-3 control-label">联系人邮箱：</label>
                                <div class="col-xs-12 col-sm-9 controls">
                                    <div class="info">yanghuqun@163.com</div>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">诉求描述：</label>
                                <div class="col-xs-12 col-sm-8 controls">
                                    <div class="info">我司目前在贵州省贵阳市一新开的园区中设立了一个办事处，作为我们在贵州后期项目的实地走访考察之用，前期打算找一家能提供基本会计代办的公司，后期可能会涉及到其他业务，并和总公司的财务中心对接。</div>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row mb0 separate">
                                <div class="col-xs-12 col-sm-8 text text-center">以下为服务机构的回复信息，请耐心等待</div>
                            </div>

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">机构回复信息：</label>
                                <div class="col-xs-12 col-sm-7 controls">
                                    <textarea class="form-control" rows="6" placeholder="请输入回复信息"></textarea>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="hidden-xs col-sm-3 text-center"></label>
                                <div class="col-xs-12 col-sm-9 controls">
                                    <button type="submit" class="btn btn-blue btn-lg btn-save font-sm">提交</button>
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
    <script type="text/javascript" src="/js/user/service/appeal.js"></script>
@endsection