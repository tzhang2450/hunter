<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:23 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>后台管理系统 - 登录</title>
    <meta name="keywords" content="后台管理系统">
    <meta name="description" content="后台管理系统">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/package/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/package/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">

    <link href="/package/css/animate.min.css" rel="stylesheet">
    <link href="/package/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            {{--<h3 class="logo-name">后台管理系统</h3>--}}

        </div>
        <h3>欢迎使用 后台管理系统</h3>

        <form class="m-t" role="form"  action="/signIn" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="用户名" name="username" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="密码" name="password" required="required">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>


        </form>
    </div>
</div>
<script src="/package/js/jquery.min.js?v=2.1.4"></script>
<script src="/package/js/bootstrap.min.js?v=3.3.6"></script>
</body>
</html>
