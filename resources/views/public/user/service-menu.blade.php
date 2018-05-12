@section("nav-center")
    <a class="logo-service" href="/user/service.html">服务机构</a>
@endsection
<aside class="col-md-2 sidebar-service" id="main-menu">
    <div class="navbar-header">
                        <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                        </span>
    </div>
    <!-- start tag cloud widget -->
    <div class="widget">
        <h4 class="title panel text-center font-lg">服务机构</h4>
        <div class="content">
            <a href="/user/service-file.html" class="btn-md font-md {!! $menu == 'file' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-user"></i>机构资料</a>
            <a href="/user/service-validate.html" class="btn-md font-md {!! $menu == 'validate' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-th-large"></i>机构认证</a>
            <a href="/user/service-safe.html" class="btn-md font-md {!! $menu == 'safe' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-lock"></i>安全中心</a>
            <a href="/user/service-manage.html" class="btn-md font-md {!! $menu == 'manage' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-list"></i>服务管理</a>
            <a href="/user/service-appeal.html" class="btn-md font-md {!! $menu == 'appeal' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-send"></i>服务诉求管理</a>
            <a href="/user/service-info.html" class="btn-md font-md {!! $menu == 'info' ? 'menu-checked' : '' !!}"><i class="glyphicon icon-book"></i>最新资讯</a>
            <a href="/user/service-case.html" class="btn-md font-md {!! $menu == 'case' ? 'menu-checked' : '' !!}"><i class="glyphicon icon-suitcase"></i>服务案例</a>
            <a href="/user/service-policy.html" class="btn-md font-md {!! $menu == 'policy' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-star"></i>相关政策</a>
        </div>
    </div>
    <!-- end tag cloud widget -->
</aside>