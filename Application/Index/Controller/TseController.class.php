<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/31
 * Time: 10:55
 */

namespace Index\Controller;


use Think\Controller;

class TseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate();
    }

    /**
     * 设置模板变量
     */
    private function setTemplate()
    {
        $this->assign('server_name',$_SERVER['SERVER_NAME']);
        $this->assign('tse',__ROOT__);
        $this->assign('tse_css',__ROOT__.'/Public/user/css/');
        $this->assign('tse_img',__ROOT__.'/Public/user/img/');
        $this->assign('tse_js',__ROOT__.'/Public/user/js/');
        $this->assign('img',__ROOT__.'/Public/images/');
    }
}