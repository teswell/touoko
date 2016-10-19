<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/28
 * Time: 13:54
 */

namespace Home\Controller;


use Think\Controller;
use Think\Page;

class TseController extends Controller
{
    protected $model;   //模型

    protected $data = array();  //添加或者编辑的数据

    public function __construct()
    {
        parent::__construct();
        $this->setView();//设置模板信息
        $this->isLogin();//检验是否登录
        $this->navi();//导航栏的面包屑和左侧权限菜单栏
    }

    /**
     * 展示列表页 有需要可以覆盖
     */
    public function index()
    {
        $this->beforeSearch();
        $where = $this->search();
        $this->model = D(CONTROLLER_NAME);
        $count = $this->model->where($where)->count();
        $page = new Page($count,C('PAGE_NUMBER'));
        $show = $page->show();
        $list = $this->model->where($where)->order('`id` DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $list = $this->beforeIndex($list);
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();
    }

    protected function beforeIndex($list)
    {
        return $list;
    }

    protected function search()
    {
        return '';
    }
    protected function beforeSearch(){}

    /**
     * 添加,如有需要可以覆盖
     */
    public function add()
    {
        $this->model = D(CONTROLLER_NAME);
        if ($_POST) {
            $this->doAdd();
            //model自动验证
            if (!$this->model->create($this->data)) {
                exit($this->model->getError());
            }
            $result = $this->model->add($this->data);
            if ($result) {
                $this->redirect('index');
            } else {
                $this->error('添加失败','add',1);
            }
        }else {
            $this->beforeAdd();
            $this->display();
        }
    }

    protected function doAdd(){}
    protected function beforeAdd(){}

    /**
     * 编辑,如有需要可以覆盖此方法
     */
    public function edit()
    {
        $this->model = D(CONTROLLER_NAME);
        if ($_POST) {
            $this->doEdit();
            //model自动验证
            if (!$this->model->create($this->data)) {
                exit($this->model->getError());
            }
            $this->model->save($this->data);
            $this->redirect('index');
        }else {
            if ($_GET['id']) {
                $this->beforeEdit();
                $info = $this->model->where('`id` = '.$_GET['id'])->find();
                $this->assign('info',$info);
                $this->display();
            }else {
                $this->error('操作失败,没接收到ID');
            }
        }
    }

    protected function beforeEdit(){}
    protected function doEdit(){}

    /**
     * 验证是否登录
     */
    private function isLogin()
    {
        if (empty($_SESSION['username']) && !strstr($_SERVER['REQUEST_URI'],'/Home/Index/login')) {
            $this->redirect('/Home/Index/login');
        }
    }

    /**
     * 设置模板的信息
     */
    private function setView()
    {
        $this->assign('server_name',$_SERVER['SERVER_NAME']);
        //bootstarap
        $this->assign('bootstrap_css',__ROOT__.'/Public/admin/bootstrap-3.3.5-dist/css/');
        $this->assign('bootstrap_js',__ROOT__.'/Public/admin/bootstrap-3.3.5-dist/js/');
        //基本样式
        $this->assign('tse_css',__ROOT__.'/Public/admin/css/');
        $this->assign('tse_fonts',__ROOT__.'/Public/admin/fonts/');
        $this->assign('tse_js',__ROOT__.'/Public/admin/js/');
        $this->assign('tse_img',__ROOT__.'/Public/admin/images/');
        $this->assign('img',__ROOT__.'/Public/images/');
        //百度在线编辑器
        $this->assign('tse_ueditor',__ROOT__.'/Public/admin/utf8-php/');
        //多图片上传插件zyupload
        $this->assign('tse_zyup',__ROOT__.'/Public/admin/zyupload/');
    }

    /**
     * 导航栏面包屑信息
     */
    private function navi()
    {
        $menu = D('Menu');
        $adminModel = D('admin');
        //面包屑
        $menuList = $menu->where('`status` = 1 AND `level` = 2')->select();
        foreach ($menuList as $key=>$value) {
            if (strstr($_SERVER['REQUEST_URI'],$value['url'])) {
                $this->assign('navi',$value);
            }
        }
        //权限菜单栏
        if ($_SESSION['username']) {
            $username = $_SESSION['username'];
            $positionId = $adminModel->where('`username` = '."'$username'")->getField('position_id');
            $leftMenu = $menu->where('`status` = 1 AND `level` = 1')->order('sort ASC')->select();
            $purview = array();
            if ($positionId == -1) {//超级管理员
                foreach ($leftMenu as $key => $value) {
                    $leftMenu[$key]['child'] = $menu->where('`status` = 1 AND `level` = 2 AND `parent_id` = '.$value['id'])->order('sort ASC')->select();
                    foreach ($leftMenu[$key]['child'] as $k=>$v) {
                        $purview[] = $v;
                    }
                }
            }else {//判断该职位是否有权限,没有权限unset掉
                $positionModel = M('position');
                $menuIds = $positionModel->where('`id` = '.$positionId)->getField('menu_ids');
                foreach ($leftMenu as $key => $value) {
                    if (strstr($menuIds,','.strval($value['id'].','))){
                        $child = $menu->where('`status` = 1 AND `level` = 2 AND `parent_id` = '.$value['id'])->order('sort ASC')->select();
                        foreach ($child as $k=>$v) {
                            if (!strstr($menuIds,','.strval($v['id'].','))){
                                unset($child[$k]);
                            }
                            $purview[] = $v;
                        }
                        $leftMenu[$key]['child'] = $child;
                    }else{
                        unset($leftMenu[$key]);
                    }
                }
            }
            if (!isAjax()) {
                //权限判断
                $newUrl = explode('/',$_SERVER['REQUEST_URI']);
                $newUrl = '/'.$newUrl[1].'/'.$newUrl[2].'/index';
                $purviewUrl = array();
                foreach ($purview as $key=>$value) {
                    $purviewUrl[] = $value['url'];
                }
                if (!in_array($newUrl,$purviewUrl)) {
                    //提示没有权限,页面找好了再补充上;
                }
            }
            $this->assign('left_menu',$leftMenu);
        }
    }

    /**
     * ajax删除
     */
    public function delete()
    {
        if ($_POST['id']) {
            $this->model = D(CONTROLLER_NAME);
            $result = $this->model->where('`id` = '.$_POST['id'])->delete();
            if ($result) {
                return $this->ajaxReturn(array('status'=>$result , 'msg'=>'删除成功'));
            }else {
                return $this->ajaxReturn(array('status'=>-1 , 'msg'=>'删除失败'));
            }
        }else {
            return $this->ajaxReturn(array('status'=>-1 , 'msg'=>'删除失败,未传入正确参数'));
        }
    }

    /**
     * ajax更改状态
     */
    public function statusChange()
    {
        if ($_POST['status'] && $_POST['id']) {
            $this->model = D(CONTROLLER_NAME);
            $result = $this->model->where('`id` = '.$_POST['id'])->save($_POST);
            if ($result) {
                return $this->ajaxReturn(array('status'=>$result , 'msg'=>'删除成功'));
            }else {
                return $this->ajaxReturn(array('status'=>-1 , 'msg'=>'删除失败'));
            }
        }else {
            return $this->ajaxReturn(array('status'=>-1 , 'msg'=>'删除失败,未传入正确参数'));
        }
    }
}