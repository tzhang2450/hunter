@section("nav-center")
    <a href="/user/person.html">个人中心</a>
@endsection
<aside class="col-md-2 sidebar" id="main-menu">
    <!-- start tag cloud widget -->
    <div class="widget">
        <h4 class="title panel text-center font-lg">个人中心</h4>
        <div class="content">
            <a href="/user/person-file.html" class="btn-md font-md {!! $menu == 'file' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-user"></i>个人资料</a>
            <a href="/user/person-validate.html" class="btn-md font-md {!! $menu == 'validate' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-th-large"></i>个人认证</a>
            <a href="/user/person-safe.html" class="btn-md font-md {!! $menu == 'safe' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-lock"></i>安全中心</a>
            <a href="/user/person-resume.html" class="btn-md font-md {!! $menu == 'resume' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-list"></i>我的简历</a>
            <a href="/user/person-offer.html" class="btn-md font-md {!! $menu == 'offer' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-send"></i>面试邀约</a>
            <a href="/user/person-job.html" class="btn-md font-md {!! $menu == 'job' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-eye-open"></i>投递的简历</a>
            <a href="/user/person-favor.html" class="btn-md font-md {!! $menu == 'favor' ? 'menu-checked' : '' !!}"><i class="glyphicon glyphicon-star"></i>收藏职位</a>
        </div>
    </div>
    <!-- end tag cloud widget -->
</aside>