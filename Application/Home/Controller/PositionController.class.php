<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/23
 * Time: 15:05
 */

namespace Home\Controller;


class PositionController extends TseController
{
    protected function beforeAdd()
    {
        $menuModel = D('menu');
        $menu = $menuModel->where('`level` = 1')->select();
        foreach ($menu as &$val) {
            $val['children'] = $menuModel->where('`parent_id` = '.$val['id'])->select();
        }

        $this->assign('menu',$menu);
    }

    protected function doAdd()
    {
        $position = $_POST['position'];
        $position['menu_ids'] = ','.implode(',',$position['menu_ids']).',';
        $this->data = $position;
    }

    protected function beforeEdit()
    {
        $menuModel = D('menu');
        $menu = $menuModel->where('`level` = 1')->select();
        foreach ($menu as &$val) {
            $val['children'] = $menuModel->where('`parent_id` = '.$val['id'])->select();
        }

        $this->assign('menu',$menu);
    }

    protected function doEdit()
    {
        $position = $_POST['position'];
        $position['menu_ids'] = ','.implode(',',$position['menu_ids']).',';
        $this->data = $position;
    }
}