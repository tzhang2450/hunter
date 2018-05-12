@section("nav-center")
    <a class="logo-enterprise" href="/user/enterprise.html">企业中心</a>
@endsection
<aside class="col-md-2 sidebar-enterprise" id="main-menu">
    <div class="navbar-header">
                        <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                        </span>
    </div>
    <!-- start tag cloud widget -->
    <div class="widget">
        <h4 class="title panel text-center font-lg">企业中心</h4>
        <div class="content">
            <a href="/user/enterprise-file.html" class="btn-md font-md {!! $menu == 'file' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-user"></i>企业资料</a>
            <a href="/user/enterprise-validate.html" class="btn-md font-md {!! $menu == 'validate' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-th-large"></i>企业认证</a>
            <a href="/user/enterprise-safe.html" class="btn-md font-md {!! $menu == 'safe' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-lock"></i>安全中心</a>
            <a href="/user/enterprise-job.html" class="btn-md font-md {!! $menu == 'job' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-list"></i>职位管理</a>
            <a href="/user/enterprise-resume.html" class="btn-md font-md {!! $menu == 'resume' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-send"></i>收到的简历</a>
            <a href="/user/enterprise-favor.html" class="btn-md font-md {!! $menu == 'favor' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-eye-open"></i>收藏的简历</a>
            <a href="/user/enterprise-appeal.html" class="btn-md font-md {!! $menu == 'appeal' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-star"></i>服务诉求管理</a>
        </div>
    </div>
    <!-- end tag cloud widget -->
</aside>