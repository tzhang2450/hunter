<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>亨泰e谷-个人中心</title>
    <meta name="description" content="亨泰e谷-个人中心" />
    <meta name="keywords" content="亨泰e谷-个人中心" />

    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="/images/hengtai.ico" />

    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/highlight.js/8.5/styles/monokai_sublime.min.css" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/magnific-popup.js/1.0.0/magnific-popup.min.css" />

    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    @yield("style")


</head>
<body class="home-template">

@include("public.layout.header")

@section("content")

@show

@include("public.layout.footer")

<script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcss.com/fitvids/1.1.0/jquery.fitvids.min.js"></script>
<script src="https://cdn.bootcss.com/highlight.js/8.5/highlight.min.js"></script>
<script src="https://cdn.bootcss.com/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>

@yield("self-script")
<script type="text/javascript" src="/js/welcome.js"></script>
</body>
</html>