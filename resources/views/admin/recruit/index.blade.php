<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/table_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:01 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>职位管理</title>

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/package/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/package/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/package/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/package/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/package/css/animate.min.css" rel="stylesheet">
    <link href="/package/css/style.min862f.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>职位列表</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-4 m-b-xs">
                            <select class="input-sm form-control input-s-sm inline change-status">
                                <option value="">请选择</option>
                                <option value="1">待审核</option>
                                <option value="2">正常</option>
                                <option value="0">已删除</option>
                            </select>
                        </div>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" placeholder="请输入关键词" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover  dataTables-example">
                            <thead>
                            <tr>

                                <th>ID</th>
                                <th>职位</th>
                                <th>发布单位</th>
                                <th>招聘人数</th>
                                <th>发布时间</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!count($recruitList))
                                <tr>
                                    <td colspan="7"><div class="text-center">暂无数据</div></td>
                                </tr>
                            @else
                                @foreach($recruitList as $recruit)
                                    <tr>
                                        <td>{{ $recruit->id }}</td>
                                        <td>{{ $recruit->title }}
                                        </td>
                                        <td>{{ $recruit->getCompany()->name }}</td>
                                        <td>
                                            @if($recruit->status === 2)
                                                {!! '正常' !!}
                                            @elseif($recruit->status === 1)
                                                {!! '待审核' !!}
                                            @else
                                                {!! '已删除' !!}
                                            @endif
                                        </td>
                                        <td><a class="btn btn-warning btn-circle" href="#" title="删除"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                        @if(count($recruitList))
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="alert" aria-live="polite" aria-relevant="all">显示 1 到 {{ count($recruitList) }} 项，共 {{ $total }} 项</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                        {!! $recruitList->render() !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<script src="/package/js/jquery.min.js?v=2.1.4"></script>
<script src="/package/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/package/js/plugins/peity/jquery.peity.min.js"></script>
<script src="/package/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="/package/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/package/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="/package/js/content.min.js?v=1.0.0"></script>
<script src="/package/js/plugins/iCheck/icheck.min.js"></script>
<script src="/package/js/demo/peity-demo.min.js"></script>
<script>
    $(document).ready(function(){
        var url = '{{ url('recruit/index.html') }}';
        $('.change-status').on('change', function(){
            var status = this.val();
            if (status != 2) {
                url += '?status='+status;
            }
        })
    });
</script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/table_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:01 GMT -->
</html>
