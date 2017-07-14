<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="/oo/Public/css/custom.css">
    <!--<title>金牛e融-客户登录</title>-->
</head>
<body>
<!--头部开始-->
<div class="header">
    <div class="top">
        <div class="title">填写信息</div>
    </div>
</div>
<div class="all">
    <div class="footer">
        <div class="avater">
            <img src="/oo/Public/./img/logo.jpg" alt="">
        </div>
        <div class="line">
            <p>金牛<span>e</span>融</p>
        </div>

        <!--<p class="agreement">-->
        <!--<span>使用前请阅读<a href="#">《渠道服务协议》</a> </span>-->
        <!--</p>-->
    </div>
    <!--内容开始-->
    <div class="container">
        <form action="<?php echo U('Home/Custom/login');?>" method="get">
            <input type="text" placeholder="姓名" name="name">
            <input type="text" placeholder="手机号" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');" maxlength="16" name="phone">
            <input type="text" placeholder="身份证号" name="number">
            <input type="submit" value="确定" class="login regist">


        </form>

    </div>
</div>
<script src="/oo/Public/js/jquery-3.1.1.js"></script>
<script src="/oo/Public/js/regist.js"></script>
</body>
</html>