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
                    <div class="row insidepage">
                        <h4 class="font-lg padding-30 padding-bottom-20">机构资料</h4>
                        <div class="warning">
                            <div class="alert alert-warning alert-dismissible font-sm" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="glyphicon glyphicon-exclamation-sign"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！
                            </div>
                        </div>

                        <form id="edit-profile" class="form-horizontal padding-lr-30">

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>机构名称</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入机构名称">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>所属行业</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                        <option>请选择所属行业</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>机构性质</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                        <option>请选择机构性质</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>机构规模</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                        <option>请选择机构规模</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>所在地区</label>
                                <div class="col-xs-3 col-sm-2 controls mr15">
                                    <select class="form-control">
                                        <option>-省份-</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                                <div class="col-xs-3 col-sm-2 controls mr15">
                                    <select class="form-control">
                                        <option>-城市-</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                                <div class="col-xs-3 col-sm-2 controls">
                                    <select class="form-control">
                                        <option>-区县-</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>联系人</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入联系人名称">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>联系电话</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入联系电话">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row mb0 separate">
                                <div class="col-xs-12 col-sm-8 text text-center">完善信息以便企业用户加深了解，增加诉求申请</div>
                            </div>

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">机构LOGO</label>
                                <div class="col-xs-12 col-sm-9 controls">
                                    <a class="btn btn-default" href=""><i class="glyphicon glyphicon-plus-sign"></i>上传机构LOGO</a>
                                    <input type="hidden" class="input-medium id-frontend">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">机构网址</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入机构网址">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">企业邮箱</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入企业电子邮箱">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">固定电话</label>
                                <div class="col-xs-3 col-sm-1 controls mr15">
                                    <input type="text" class="real-name form-control" placeholder="区号">
                                </div> <!-- /controls -->
                                <div class="col-xs-6 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="电话号码">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">创办时间</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入创办时间">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">机构简介</label>
                                <div class="col-xs-12 col-sm-6 controls">
                                    <textarea class="form-control" rows="6" placeholder="请输入公司简介"></textarea>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">机构荣誉</label>
                                <div class="col-xs-12 col-sm-6 controls">
                                    <textarea class="form-control" rows="6" placeholder="请输入公荣誉（编辑器）"></textarea>
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
    <script type="text/javascript" src="/js/user/service/file.js"></script>
@endsection