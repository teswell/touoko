<?php
namespace Home\Controller;
class IndexController extends TseController {
    public function index()
    {
        $this->display('Index/index');
    }

    /**
     * 后台账户登录
     */
    public function login()
    {
        if ($_POST['login']) {
            $login = $_POST['login'];
            if (!check_verify($login['verify'])) {
                $this->error('验证码错误','login',3);
            }
            $adminModel = D('admin');
            $where = array(
                'username'  => $login['username'],
                'password'  => md5(md5($login['password']).'tsewell'),
                'status'    => 1,
            );
            $result = $adminModel->where($where)->select();
            if (!empty($result)) {
                session('username',$login['username']);
                $this->success('登录成功','index',3);
            }else {
                $this->error('账号或密码错误','login',3);
            }
        }else {
            $this->display('Index/login');
        }
    }

    /**
     * 后台账号登出
     */
    public function logout()
    {
        if (session('?username')) {
            session('username',null);
            $this->redirect('login');
        }else {
            $this->redirect('login');
        }
    }

    /**
     * 密码修改
     */
    public function changePwd()
    {
        if ($_POST['password']) {
            $menu = D('admin');
            $username = $_SESSION['username'];
            $oldPassword = md5(md5($_POST['password']['old_password']).'tsewell');
            $newPassword = md5(md5($_POST['password']['new_password']).'tsewell');
            $result = $menu->where(" `username` = '$username' AND `password` = '$oldPassword'")->find();
            if (empty($result)) {
                $this->error('密码错误','change_pwd',1);
            }else {
                $rst = $menu->where('`id` = '.$result['id'])->save(array('password'=>$newPassword));
                if ($rst) {
                    $this->success('修改密码成功','change_pwd',1);
                }else {
                    $this->error('修改密码失败','change_pwd',1);
                }
            }
        }else {
            $this->display('change_pwd');
        }
    }
}