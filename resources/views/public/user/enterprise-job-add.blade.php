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
                        <h4 class="font-lg padding-30 padding-bottom-20">添加新职位</h4>
                        <div class="warning">
                            <div class="alert alert-warning alert-dismissible font-sm" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="glyphicon glyphicon-exclamation-sign"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！
                            </div>
                        </div>

                        <form id="edit-profile" class="form-horizontal padding-lr-30">

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>职位名称</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="请输入职位名称">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>职位类别</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                        <option>请选择职位类别</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>工作地点</label>
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
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>招聘有效时间</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>薪资待遇</label>
                                <div class="col-xs-5 col-sm-2 controls mr15">
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="最低薪资">
                                        <span class="input-group-addon">元</span>
                                    </div>
                                </div> <!-- /controls -->
                                <div class="col-xs-5 col-sm-2 controls">
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="最高薪资">
                                        <span class="input-group-addon">元</span>
                                    </div>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label"><span>*</span>职位描述</label>
                                <div class="col-xs-12 col-sm-6 controls">
                                    <textarea class="form-control" rows="8" placeholder="请输入职位描述"></textarea>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row mb0 separate">
                                <div class="col-xs-12 col-sm-8 text text-center">完善职位信息，可增加求职者简历投递数量</div>
                            </div>

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">招聘人数</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                        <option>请选择招聘人数</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">工作经验要求</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                        <option>请选择工作经验</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">到岗时间要求</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                        <option>请选择到岗时间</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">教育程度要求</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <select class="form-control">
                                        <option>请选择教育程度</option>
                                        <option>选项1</option>
                                        <option>选项2</option>
                                        <option>选项3</option>
                                        <option>选项4</option>
                                        <option>选项5</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">年龄要求</label>
                                <div class="col-xs-4 col-sm-2 controls mr15">
                                    <input type="text" class="real-name form-control" placeholder="最低年龄">
                                </div> <!-- /controls -->
                                <div class="col-xs-4 col-sm-2 controls mr15">
                                    <input type="text" class="real-name form-control" placeholder="最高年龄">
                                </div> <!-- /controls -->
                                <div class="col-xs-2 col-sm-2 controls">
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">  不限
                                    </label>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">性别要求</label>
                                <div class="col-xs-12 col-sm-3 controls">
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">  不限
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">  男
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">  女
                                    </label>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">婚姻状况要求</label>
                                <div class="col-xs-12 col-sm-6 controls">
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">  不限
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">  已婚
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">  未婚
                                    </label>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">福利待遇</label>
                                <div class="col-xs-12 col-sm-8 controls">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1">  三险一金
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="option2">  五险一金
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="option3">  包吃住
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1">  综合补贴
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="option2">  年终奖金
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="option3">  法定节假日
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1">  销售奖金
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="option2">  年假制度
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="option3">  带薪旅游
                                    </label>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="row mb0 separate">
                                <div class="col-xs-12 col-sm-8 text text-center">联系方式默认为基本资料中的企业联系方式</div>
                            </div>

                            <div class="row control-group">
                                <label class="col-xs-12 col-sm-3 control-label">招聘联系方式</label>
                                <div class="col-xs-4 col-sm-2 controls mr15">
                                    <input type="text" class="real-name form-control" placeholder="联系恩名称">
                                </div> <!-- /controls -->
                                <div class="col-xs-6 col-sm-3 controls">
                                    <input type="text" class="real-name form-control" placeholder="联系人电话号码">
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
    <script type="text/javascript" src="/js/user/enterprise/job.js"></script>
@endsection