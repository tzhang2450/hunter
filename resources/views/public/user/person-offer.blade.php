@extends("public.layout.normal")

@section("style")
    <link rel="stylesheet" type="text/css" href="/css/person.css">
    <link rel="stylesheet" type="text/css" href="/css/person-model.css">
@endsection

@section("content")
    <!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                @include("public.user.person-menu")

                <main class="col-md-10 main-content">
                    <div class="row insidepage pb30">
                        <h4 class="font-lg padding-30 padding-bottom-20">面试邀约</h4>
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
                                            <div class="col-xs-11 col-sm-11 font-list-title">公司名称</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="row mb0">
                                            <div class="col-sm-6 font-list-title">在招职位</div>
                                            <div class="col-sm-4 font-list-title">邀约时间</div>
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
                                        <div class="col-xs-6 font-list-title">公司名称 / 在招职位</div>
                                        <div class="col-xs-3 font-list-title">邀约时间</div>
                                        <div class="col-xs-2 font-list-title">操作</div>
                                    </div>
                                </div>
                                <div class="list-body-l2">

                                    <div class="row mb0 bb1">
                                        <div class="col-sm-5">
                                            <div class="row mb0">
                                                <div class="col-xs-1 col-sm-1">
                                                    <label class="chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">贵州利泰信息科技股份有限公司1</h4>
                                                        <div class="font-sm title-sub">计算机/互联网 / 民营企业 / 50-200人</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">压铸工/清理工/操作工/普工</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-4">
                                                    <div class="font-sm list-info single-line status">2018-04-13</div>
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
                                                    <label class="chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">贵州利泰信息科技股份有限公司2</h4>
                                                        <div class="font-sm title-sub">计算机/互联网 / 民营企业 / 50-200人</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">压铸工/清理工/操作工/普工</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-4">
                                                    <div class="font-sm list-info single-line status">2018-04-13</div>
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
                                                    <label class="chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">贵州利泰信息科技股份有限公司3</h4>
                                                        <div class="font-sm title-sub">计算机/互联网 / 民营企业 / 50-200人</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">压铸工/清理工/操作工/普工</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-4">
                                                    <div class="font-sm list-info single-line status">2018-04-13</div>
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
                                                    <label class="chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">贵州利泰信息科技股份有限公司4</h4>
                                                        <div class="font-sm title-sub">计算机/互联网 / 民营企业 / 50-200人</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">压铸工/清理工/操作工/普工</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-4">
                                                    <div class="font-sm list-info single-line status">2018-04-13</div>
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
                                                    <label class="chackbox chackbox20">
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="list-info">
                                                        <h4 class="font-bg title-main">贵州利泰信息科技股份有限公司5</h4>
                                                        <div class="font-sm title-sub">计算机/互联网 / 民营企业 / 50-200人</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row mb0">
                                                <div class="col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-0">
                                                    <div class="font-sm list-info single-line">压铸工/清理工/操作工/普工</div>
                                                </div>
                                                <div class="col-xs-3 col-sm-4">
                                                    <div class="font-sm list-info single-line status">2018-04-13</div>
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
            </div>

            </main>
        </div>
        </div>
    </section>
@endsection
@section("self-script")
    <script type="text/javascript" src="/js/user/person/validate.js"></script>
@endsection