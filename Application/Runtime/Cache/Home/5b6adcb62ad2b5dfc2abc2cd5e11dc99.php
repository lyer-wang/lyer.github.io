<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="/oo/Public/css/regist.css">
    <title>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</title>
</head>
<body>
<script src="/oo/Public/js/jquery-3.1.1.js"></script>
<script src="/oo/Public/js/regist.js"></script>
<!--头部开始-->
<div class="header">
    <div class="top">
        <div class="arrow" onclick="location.href='<?php echo U("Home/Index/index");?>'">&lt;</div>
        <div class="title">注册金牛e族</div>
        <div class="none"></div>
    </div>
</div>
<!--内容开始-->
<div class="container">
    <form action="<?php echo U('Home/Login/regis');?>" method="post">
        <input type="text" placeholder="用户名" name="username">
        <input type="password" placeholder="设置密码" maxlength="16" name="password">
        <input type="text" placeholder="真实姓名" name="name">
        <input type="text" placeholder="手机号码" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');" maxlength="11" name="phone">
        <input type="submit" value="立即注册" class="regist">
    </form>

</div>
<div class="footer">
    <div class="line">
        <i></i>
        <p>金牛<span>e</span>族</p>
        <i></i>
    </div>
    <div class="avater">
        <img src="/oo/Public/./img/logo.jpg" alt="">
    </div>
    <p class="agreement">
        <span>使用前请阅读<a href="<?php echo U('Home/Agree/index');?>">《渠道服务协议》</a> </span>
    </p>
</div>
</body>
</html>