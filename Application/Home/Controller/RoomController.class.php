<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/17
 * Time: 16:46
 */

namespace Home\Controller;

use Home\Common\TseConst;
use Think\Page;
use Think\Upload;

class RoomController extends TseController
{
    public function index()
    {
        $this->model = D(CONTROLLER_NAME);
        $houseModel = D('house');
        $const = new TseConst();

        !empty($_GET['id'])?$houseId=$_GET['id']:$houseId=$_SESSION['adminHouseId'];
        $count = $this->model->where('`house_id` = '.$houseId)->count();
        $page = new Page($count,C('PAGE_NUMBER'));
        $show = $page->show();
        $list = $this->model->where('`house_id` = '.$houseId)->order('`id` DESC')->limit($page->firstRow.','.$page->listRows)->select();
        //数据处理
        if (!empty($list)) {
            foreach ($list as $key=>$val) {
                $list[$key]['house_name'] = $houseModel->where('`id` = '.$val['house_id'])->getField('title');
                foreach ($const::$roomType as $k=>$v) {
                    $list[$key]['type'] = str_replace($v['key'],$v['val'],$list[$key]['type']);
                }
            }
        }
        session('adminHouseId',$_GET['id']);
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();
    }


    protected function doAdd()
    {
        $room = $_POST['room'];
        $img = $_FILES['img'];
        $upload = new Upload(C('UPLOAD_CONFIG'));
        $info = $upload->uploadOne($img);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
            $room['img'] = $info['savepath'].$info['savename'];
        }
        $room['type']? $room['type']=implode(',',$room['type']):$room['type']=' ';
        $room['house_id'] = $_SESSION['adminHouseId'];
        $this->data = array_merge(array(),$room);
    }

    protected function doEdit()
    {
        $room = $_POST['room'];
        if (!empty($_FILES['img']['tmp_name'])) {
            $img = $_FILES['img'];
            $upload = new Upload(C('UPLOAD_CONFIG'));
            $info = $upload->uploadOne($img);
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                $room['img'] = $info['savepath'].$info['savename'];
            }
        }
        $room['type']? $room['type']=implode(',',$room['type']):$room['type']=' ';
        $room['house_id'] = $_SESSION['adminHouseId'];
        $this->data = array_merge(array(),$room);
    }
}