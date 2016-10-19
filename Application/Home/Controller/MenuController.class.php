<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/1
 * Time: 14:43
 */

namespace Home\Controller;


use Think\Page;

class MenuController extends TseController
{
    public function index()
    {
        if ($_GET['id']) {
            $where = '`level` = 2 AND `parent_id` = '.$_GET['id'];
        }else {
            $where = '`level` = 1';
        }
        $menuModel = D('Menu');
        $count = $menuModel->where($where)->count();
        $page = new Page($count,C('PAGE_NUMBER'));
        $show = $page->show();
        $menuList = $menuModel->where($where)->order('sort ASC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list',$menuList);
        $this->display('index');
    }

    protected function beforeAdd()
    {
        $menu = $this->model->where('`status` = 1 AND `level` = 1')->select();
        $this->assign('menu',$menu);
    }

    protected function doAdd()
    {
        $menu = $_POST['menu'];
        if ($menu['parent_id'] == 0) {
            $menu['level'] = 1;
        }else {
            $menu['level'] = 2;
        }
        $this->data = array_merge(array(),$menu);
    }

    protected function beforeEdit()
    {
        $menu = $this->model->where('`status` = 1 AND `level` = 1')->select();
        $this->assign('menu',$menu);
    }

    protected function doEdit()
    {
        $menu = $_POST['menu'];
        if ($menu['parent_id'] == 0) {
            $menu['level'] = 1;
        }else {
            $menu['level'] = 2;
        }
        $this->data = array_merge(array(),$menu);
    }

}