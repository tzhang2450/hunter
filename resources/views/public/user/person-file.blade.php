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
                        <h4 class="font-lg padding-30 padding-bottom-20">我的简历</h4>
                        <div class="warning">
                            <div class="alert alert-warning alert-dismissible font-sm" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="glyphicon glyphicon-exclamation-sign"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！
                            </div>
                        </div>

                        <form id="edit-profile" class="form-horizontal padding-lr-30">

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>姓名</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入姓名">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>性别</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">  男
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">  女
                                    </label>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>出生年月</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="选择出生年月">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>最高学历</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                        <option>初中以下</option>
                                        <option>初中</option>
                                        <option>高中</option>
                                        <option>大专</option>
                                        <option>本科</option>
                                        <option>硕士</option>
                                        <option>博士</option>
                                        <option>硕士以上</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>工作经验</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                        <option>1年</option>
                                        <option>2年</option>
                                        <option>3年</option>
                                        <option>4年</option>
                                        <option>5年</option>
                                        <option>6年</option>
                                        <option>7年</option>
                                        <option>8年</option>
                                        <option>9年</option>
                                        <option>10年</option>
                                        <option>10年以上</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>手机号码</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入手机号码">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>现居住地</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请选择现居住地">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row mb0 separate">
                                <div class="col-xs-12 col-sm-8 text text-center">以下为选填的补充信息，以便让企业更了解你</div>
                            </div>
                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">电子邮箱</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入电子邮箱">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">头像</label>
                                <div class="col-xs-12 col-sm-9 controls">
                                    <a class="btn btn-default" href=""><i class="glyphicon glyphicon-plus-sign"></i>上传头像</a>
                                    <input type="hidden" class="input-medium id-frontend">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">民族</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="民族">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">婚姻状态</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">  已婚
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">  未婚
                                    </label>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">QQ</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="QQ">
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
    <script type="text/javascript" src="/js/user/person/file.js"></script>
@endsection