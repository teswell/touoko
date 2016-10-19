<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/24
 * Time: 11:48
 */

namespace Home\Controller;


use Home\Common\TseConst;

class AdminController extends TseController
{
    protected function beforeIndex($list)
    {
        if (!empty($list)) {
            $positionModel = M('position');
            $position = $positionModel->select();
            foreach ($list as $key=>$val) {
                if ($val['position_id'] == -1) {
                    $list[$key]['position'] = '超级管理员';
                }else {
                    foreach ($position as $k=>$v) {
                        if ($v['id'] == $val['position_id']) {
                            $list[$key]['position'] = $v['name'];
                        }
                    }
                }
            }
        }
        return $list;
    }

    protected function beforeAdd()
    {
        $positionModel = M('position');
        $provinceModel = M('province');
        $position = $positionModel->select();
        $province = $provinceModel->select();
        $this->assign('province',$province);
        $this->assign('position',$position);
    }

    protected function doAdd()
    {
        $admin = $_POST['admin'];
        $admin['password'] = md5(md5($admin['password']).'tsewell');
        $admin['creat_time'] = time();
        $tse = new TseConst();
        if ($admin['position_id'] != $tse::HOUSEKEEPER) {
            $admin['area_id'] = 1;
        }
        $this->data = $admin;
    }


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
                $this->getArea($info);
                $this->assign('info',$info);
                $this->display();
            }else {
                $this->error('操作失败,没接收到ID');
            }
        }
    }

    private function getArea($info)
    {
        if ($info['area_id'] == 1) {
            $this->assign('isArea',-1);
        } else {
            $areaModel = M('area');
            $cityModel = M('city');
            $provinceModel = M('province');
            $cityid = $areaModel->where('`areaid` = '.$info['area_id'])->getField('father');
            $provinceid = $cityModel->where('`cityid` = '.$cityid)->getField('father');

            $provinceList =  $provinceModel->select();
            $cityList = $cityModel->where('`father` = '.$provinceid)->select();
            $areaList = $areaModel->where('`father` = '.$cityid)->select();

            $this->assign('isArea',1);
            $this->assign('province',$provinceList);
            $this->assign('city',$cityList);
            $this->assign('area',$areaList);
        }
    }

    protected function beforeEdit()
    {
        $positionModel = M('position');
        $position = $positionModel->select();
        $this->assign('position',$position);
    }

    protected function doEdit()
    {
        $admin = $_POST['admin'];
        if (!empty($admin['password'])) {
            $admin['password'] = md5(md5($admin['password']).'tsewell');
        }else {
            unset($admin['password']);
        }
        $tse = new TseConst();
        if ($admin['position'] != $tse::HOUSEKEEPER) {
            $admin['area_id'] = 1;
        }
        $this->data = $admin;
    }
}