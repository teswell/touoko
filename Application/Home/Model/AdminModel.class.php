<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/28
 * Time: 14:34
 */

namespace Home\Model;


use Think\Model;

class AdminModel extends Model
{
    protected $_validate = array(
        array('verify','require','验证码必须！',1,'function',4),//验证验证码,只在登录时候生效
        array('username','require','账号不能为空！'),
        array('password','require','密码不能为空！'),
        array('repassword','password','确认密码不正确',0,'confirm'),
    );
}