<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>后台管理系统 - @yield('title')</title>

    <meta name="keywords" content="后台管理系统">
    <meta name="description" content="后台管理系统">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="package/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="package/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="package/css/animate.min.css" rel="stylesheet">
    <link href="package/css/style.min862f.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    @include('admin.layouts.menu')
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    @include('admin.layouts.page-wrapper')
    <!--右侧部分结束-->
    <!--右侧边栏开始-->
    @include('admin.layouts.right-sidebar')
    <!--右侧边栏结束-->
</div>
<script src="package/js/jquery.min.js?v=2.1.4"></script>
<script src="package/js/bootstrap.min.js?v=3.3.6"></script>
<script src="package/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="package/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="package/js/plugins/layer/layer.min.js"></script>
<script src="package/js/hplus.min.js?v=4.1.0"></script>
<script type="text/javascript" src="package/js/contabs.min.js"></script>
<script src="package/js/plugins/pace/pace.min.js"></script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:17:11 GMT -->
</html>