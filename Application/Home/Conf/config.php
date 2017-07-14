<?php
return array(
    //'配置项'=>'配置值'
    URL_MODEL=>1,
    'SHOW_PAGE_TRACE' => false,
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'sqld.duapp.com', // 服务器地址
//    'DB_HOST'               =>  'localhost', // 服务器地址

    //'DB_HOST'               =>  '192.168.0.119', // 服务器地址
    //'DB_HOST'               =>  '192.99.68.105', // 服务器地址

    'DB_NAME'               =>  'scpYtvTwpcNUtAeEHuuK',          // 数据库名
//    'DB_NAME'               =>  'tg_applicant',          // 数据库名


    'DB_USER'               =>  '31f8cf0fa22c4e6c89b4af4be9db21bd',      // 用户名
//    'DB_USER'               =>  'root',      // 用户名

    'DB_PWD'                =>  'e27806cdac694e1cb0fce8a5a655b12b',          // 密码
    //'DB_PWD'                =>  '',          // 密码
//    'DB_PWD'                =>  'root',          // 密码
//    'DB_PORT'               =>  '3306',        // 端口

    'DB_PORT'               =>  '4050',        // 端口
    'DB_PREFIX'             =>  't_',    // 数据库表前缀
    'DB_CHARSET'=>'utf8',

    'DEFAULT_MODULE'=>'Home',
    'DEFAULT_CONTROLLER'=>'index',
    'DEFAULT_ACTION'=>'index',

    //改变定界符        在花括号 外面加  尖括号。
    'TMPL_L_DELIM'=>'<{',
    'TMPL_R_DELIM'=>'}>',

    'TMPL_PARSE_STRING'  =>array(
        '__BUI__'=>__ROOT__.'/application/Admin/view/bui',
        //'__PUBLIC__' => '/Public', // 更改默认的/Public 替换规则
        '__JS__'     => '/Public/JS/', // 增加新的JS类库路径替换规则
        '__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则
        '__PIC__'=>__ROOT__.'/Public/View/Home/upload',
        '__UP__'=>__ROOT__.'/Public/View/Home/upload',
        '__Public__' => __ROOT__.'/Public/',
        '__Peibo__' => __ROOT__.'/Public/view/home',
    )
);
?>