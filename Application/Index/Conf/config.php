<?php
return array(
	//'配置项'=>'配置值'
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysqli',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'uoko',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PARAMS'          	=>  array(), // 数据库连接参数

    /* 模板设定 */
    'TMPL_ENGINE_TYPE'      =>  'Smarty',     // 默认模板引擎 以下设置仅对使用Think模板引擎有效


    'PAGE_NUMBER'           =>  10, //每页分页条数

    'UPLOAD_CONFIG'         =>array(
        'maxSize'    =>    3145728,
        'rootPath'   =>    './Public/images/',
        'savePath'   =>    '',
        'saveName'   =>    array('uniqid',''),
        'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
        'autoSub'    =>    true,
        'subName'    =>    array('date','Ymd'),
    ),
);