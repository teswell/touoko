<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/22
 * Time: 14:42
 */

namespace Index\Controller;


class MemberController extends TseController
{
    /**
     * 用户注册
     */
    public function register()
    {
        if ($_POST) {
            if (!check_verify($login['verify'])) {
                $this->error('验证码错误','login',3);
            }
        }else {
            $this->display();
        }
    }

    /**
     * 忘记密码
     */
    public function forget()
    {
        if ($_POST) {

        }else {
            $this->display();
        }
    }
}