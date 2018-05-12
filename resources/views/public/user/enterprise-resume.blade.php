@extends("public.layout.normal")

@section("style")
    <link rel="stylesheet" type="text/css" href="/css/user-center.css">
    <link rel="stylesheet" type="text/css" href="/css/enterprise.css">
    <link rel="stylesheet" type="text/css" href="/css/enterprise-safe.css">
@endsection

@section("content")
    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                @include("public.user.enterprise-menu")

                <main class="col-md-10 main-content">
                    <div class="row insidepage pb50">
                        <h4 class="font-lg padding-30 padding-bottom-20">收到的简历</h4>
                        <div class="warning">
                            <div class="alert alert-warning alert-dismissible font-sm" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="glyphicon glyphicon-exclamation-sign"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！
                            </div>
                        </div>

                        <div class="list-body-box">
                            <div class="table">
                                <div class="hidden-xs list-title row mb0">
                                    <div class="col-sm-5">
                                        <div class="row chackbox20-total">
                                            <div class="col-xs-1 col-sm-1">
                                                <label class="hidden-xs mb0">
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                            <div class="col-xs-11 col-sm-11 font-list-title">人才姓名（性别 / 年龄 / 工作经验）</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="row mb0">
                                            <div class="col-sm-4 font-list-title">意向职位</div>
                                            <div class="col-sm-3 font-list-title">投递时间</div>
                                            <div class="col-sm-3 font-list-title">学历</div>
                                            <div class="col-sm-2 font-list-title">操作</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden-sm hidden-md hidden-lg list-title row mb0">
                                    <div class="row chackbox20-total">
                                        <div class="col-xs-1 col-sm-1">
                                            <label class="mb0">
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                        <div class="col-xs-4 font-list-title">人才 / 意向职位</div>
                                        <div class="col-xs-3 font-list-title">投递时间</div>
                                        <div class="col-xs-2 font-list-title">学历</div>
                                        <div class="col-xs-2 font-list-title">操作</div>
                                    </div>
                                </div>

                                <div class="list-body-l1">
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1">
                                                    <label class="mb0 chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main"><a class="font-bg" href="">王定才</a><small>（ 男 / 27岁 / 3年经验 ）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">保险业务经理</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line">大学本科</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">删除</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1">
                                                    <label class="mb0 chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main"><a class="font-bg" href="">李丽丹</a><small>（ 女 / 27岁 / 3年经验 ）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">保险业务经理</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line">高中</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">删除</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1">
                                                    <label class="mb0 chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main"><a class="font-bg" href="">张发奎</a><small>（ 男 / 32岁 / 8年经验 ）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">高级机床维修工程师</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line">大学本科</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">删除</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1">
                                                    <label class="mb0 chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main"><a class="font-bg" href="">刘茂</a><small>（ 男 / 27岁 / 3年经验 ）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">保险业务经理</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line">大学专科</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">删除</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1">
                                                    <label class="mb0 chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main"><a class="font-bg" href="">兰荣秋</a><small>（ 男 / 27岁 / 3年经验 ）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">保险业务经理</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line">大学本科</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">删除</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1">
                                                    <label class="mb0 chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main"><a class="font-bg" href="">纳兰秀清</a><small>（ 女 / 27岁 / 3年经验 ）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">保险业务经理</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line">高中</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">删除</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1">
                                                    <label class="mb0 chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main"><a class="font-bg" href="">刘喜才</a><small>（ 男 / 32岁 / 8年经验 ）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">高级机床维修工程师</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line">大学本科</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">删除</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1">
                                                    <label class="mb0 chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main"><a class="font-bg" href="">丘荣茂</a><small>（ 男 / 27岁 / 3年经验 ）</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">保险业务经理</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-3">
                                                    <div class="font-sm list-info single-line">2018-04-23</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-3">
                                                    <div class="font-sm list-info single-line">大学专科</div>
                                                </div>
                                                <div class="col-xs-2 col-sm-2">
                                                    <div class="font-sm list-info single-line detail"><a class="font-sm" href="http://www.hunt.com/recruit/detail.html?id='+value.id+'">删除</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb0 list-controls">
                                        <div class="col-xs-12 col-sm-5">
                                            <div class="row mb0 controls-all">
                                                <div class="col-xs-11 col-xs-offset-1 col-sm-11 col-sm-offset-1">
                                                    <a class="btn btn-default btn-sm" href="">全部删除</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-7">
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                                    <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                                                    <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                                                    <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
                                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>
                                                </ul>
                                            </nav>
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
    <script type="text/javascript" src="/js/user/enterprise/resume.js"></script>
@endsection