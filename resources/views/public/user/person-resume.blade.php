@extends("public.layout.normal")

@section("style")
    <link rel="stylesheet" type="text/css" href="/css/person.css">
    <link rel="stylesheet" type="text/css" href="/css/person-resume.css">
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

                        <div class="padding-lr-30">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs row" role="tablist">
                                <li class="col-xs-3 col-sm-2 active" role="presentation"><a href="#baseinfo" aria-controls="baseinfo" role="tab" data-toggle="tab" class="font-sm">基本信息</a></li>
                                <li class="col-xs-3 col-sm-2" role="presentation"><a href="#jobintention" aria-controls="jobintention" role="tab" data-toggle="tab" class="font-sm">求职意向</a></li>
                                <li class="col-xs-3 col-sm-2" role="presentation"><a href="#workexperience" aria-controls="workexperience" role="tab" data-toggle="tab" class="font-sm">工作经历</a></li>
                                <li class="col-xs-3 col-sm-2" role="presentation"><a href="#educationalexperience" aria-controls="educationalexperience" role="tab" data-toggle="tab" class="font-sm">教育经历</a></li>
                                <li class="hidden-xs col-xs-3 col-sm-2" role="presentation"><a href="#selfevaluation" aria-controls="selfevaluation" role="tab" data-toggle="tab" class="font-sm">自我评价</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane fade in active" id="baseinfo">
                                    <form id="edit-profile" class="form-horizontal">
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
                                                    <option>请选择最高学历</option>
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
                                                    <option>请选择工作经验</option>
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
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>现居住地</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <input type="text" class="real-name form-control" placeholder="请选择现居住地">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>手机号码</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <input type="text" class="real-name form-control" placeholder="请输入手机号码">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label">电子邮箱</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <input type="text" class="real-name form-control" placeholder="请输入电子邮箱">
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

                                <div role="tabpanel" class="tab-pane fade" id="jobintention">
                                    <form id="edit-profile" class="form-horizontal">
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>从事行业</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <select class="form-control">
                                                    <option>请选择行业</option>
                                                    <option>选项1</option>
                                                    <option>选项2</option>
                                                    <option>选项3</option>
                                                    <option>选项4</option>
                                                    <option>选项5</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>期望岗位</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <input type="text" class="real-name form-control" placeholder="请输入期望岗位">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>期望城市</label>
                                            <div class="col-xs-5 col-sm-2 controls mr15">
                                                <select class="form-control">
                                                    <option>请选择省份</option>
                                                    <option>选项1</option>
                                                    <option>选项2</option>
                                                    <option>选项3</option>
                                                    <option>选项4</option>
                                                    <option>选项5</option>
                                                </select>
                                            </div> <!-- /controls -->
                                            <div class="col-xs-5 col-sm-2 controls">
                                                <select class="form-control">
                                                    <option>请选择城市</option>
                                                    <option>选项1</option>
                                                    <option>选项2</option>
                                                    <option>选项3</option>
                                                    <option>选项4</option>
                                                    <option>选项5</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>到岗时间</label>
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
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>工作特长</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <input type="text" class="real-name form-control" placeholder="请输入工作特长">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>期望薪资</label>
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
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>工作性质</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <label class="radio-inline">
                                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">  不限
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">  全职
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">  兼职
                                                </label>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>工作状态</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <select class="form-control">
                                                    <option>请选择工作状态</option>
                                                    <option>选项1</option>
                                                    <option>选项2</option>
                                                    <option>选项3</option>
                                                    <option>选项4</option>
                                                    <option>选项5</option>
                                                </select>
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

                                <div role="tabpanel" class="tab-pane fade" id="workexperience">
                                    <form id="edit-profile" class="form-horizontal">
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>公司名称</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <input type="text" class="real-name form-control" placeholder="请输入公司名称">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>担任职位</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <input type="text" class="real-name form-control" placeholder="请输入担任职位">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>在职时间</label>
                                            <div class="col-xs-5 col-sm-2 controls mr15">
                                                <input type="text" class="real-name form-control" placeholder="开始时间">
                                            </div> <!-- /controls -->
                                            <div class="col-xs-5 col-sm-2 controls">
                                                <input type="text" class="real-name form-control" placeholder="结束时间">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>工作内容</label>
                                            <div class="col-xs-12 col-sm-6 controls">
                                                <textarea class="form-control" rows="5" placeholder="请输入工作内容"></textarea>
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

                                <div role="tabpanel" class="tab-pane fade" id="educationalexperience">
                                    <form id="edit-profile" class="form-horizontal">
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>学校名称</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <input type="text" class="real-name form-control" placeholder="请输入学校名称">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>所学专业</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <input type="text" class="real-name form-control" placeholder="请输入所学专业">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>在校时间</label>
                                            <div class="col-xs-5 col-sm-2 controls mr15">
                                                <input type="text" class="real-name form-control" placeholder="开始时间">
                                            </div> <!-- /controls -->
                                            <div class="col-xs-5 col-sm-2 controls">
                                                <input type="text" class="real-name form-control" placeholder="结束时间">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>获得学历</label>
                                            <div class="col-xs-12 col-sm-3 controls">
                                                <select class="form-control">
                                                    <option>请选择学历</option>
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
                                            <label class="hidden-xs col-sm-3 text-center"></label>
                                            <div class="col-xs-12 col-sm-9 controls">
                                                <button type="submit" class="btn btn-blue btn-lg btn-save font-sm">保存信息</button>
                                            </div>
                                        </div> <!-- /form-actions -->
                                    </form>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="selfevaluation">
                                    <form id="edit-profile" class="form-horizontal">
                                        <div class="row control-group">
                                            <label class="col-xs-12 col-sm-3 control-label"><span>*</span>自我评价</label>
                                            <div class="col-xs-12 col-sm-6 controls">
                                                <textarea class="form-control" rows="8" placeholder="请输入自我评价"></textarea>
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

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

@endsection
@section("self-script")
    <script type="text/javascript" src="/js/user/person/resume.js"></script>
@endsection