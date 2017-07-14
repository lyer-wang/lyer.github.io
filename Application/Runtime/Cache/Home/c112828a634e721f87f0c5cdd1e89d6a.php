<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/oo/Public/css/cust-manager.css">
    <!--<title>金牛e族-客户管理</title>-->
</head>
<body>
<!--头部开始-->
<div class="header">
    <div class="top">
        <div class="title">客户管理</div>
        <div class="none"></div>
    </div>
</div>
<div class="container">
    <div class="mine">
        <p>欢迎你:<span><?php echo (session('name')); ?></span></p>
        <p class="mine-ewm">我的二维码</p>
        <p  onclick="location.href='<?php echo U("Home/Index/index");?>'">退出</p>
    </div>
    <div class="main">
        <div class="title">
            <p>客户管理</p>
            <div class="cardsizer">
                <ul class="sizer-toggle">
                    <li class="allcard">全部</li>
                    <li class="gd">光大银行</li>
                    <li class="pf">浦发银行</li>
                    <!--<li class="none">未通过</li>-->
                </ul>
                <i>
                    <img src="/oo/Public/./img/sx.png" alt="">
                </i>
                <span>银行筛选</span>
            </div>
            <div class="sizer">
                <ul class="sizer-toggle">
                    <li class="all">全部</li>
                    <li class="running">审核中</li>
                    <li class="done">通过</li>
                    <li class="none">未通过</li>
                </ul>
                <i>
                    <img src="/oo/Public/./img/sx.png" alt="">
                </i>
                <span>状态筛选</span>
            </div>
        </div>
        <div class="main-screen">
            <div class="list-title list">
                <div class="cust-name lists">姓名</div>
                <div class="cust-tel lists">电话</div>
                <div class="cust-style lists">卡种</div>
                <div class="cust-date lists">申请日期</div>
                <div class="cust-state lists">申请状态</div>
            </div>
            <?php if(is_array($data)): foreach($data as $key=>$b): ?><div class="list">
                    <div class="cust-name lists"><?php echo ($b['name']); ?></div>
                    <div class="cust-tel lists"><?php echo (substr($b['phone'],0,3)); ?>****<?php echo (substr($b['phone'],7)); ?></div>
                    <div class="cust-style lists"><?php echo ($b['car_name']); ?></div>
                    <div class="cust-date lists"><?php echo ($b['record']); ?></div>
                    <div class="cust-state lists"><?php echo ($b['application']); ?></div>
                </div><?php endforeach; endif; ?>
        </div>
    </div>
</div>
<div class="footer">
    <p>申请人数: &nbsp;<span class="all"></span></p>
    <p>通过: &nbsp;<span class="done"></span></p>
    <p>审核中: &nbsp;<span class="running"></span></p>
    <p>未通过: &nbsp;<span class="none">10</span></p>
</div>
<div class="alert">
    <img src="/oo/Public/./img/qr/<?php echo (session('code')); ?>.jpg" alt="">
</div>
</body>
<script src="/oo/Public/js/jquery-3.1.1.js"></script>
<script src="/oo/Public/js/cust-manager.js"></script>
</html>