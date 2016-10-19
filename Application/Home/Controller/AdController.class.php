<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/11
 * Time: 10:05
 */

namespace Home\Controller;


use Think\Upload;

class AdController extends TseController
{
    protected function beforeSearch()
    {
        $adspaceModel = D('adspace');
        $adspace = $adspaceModel->where('`status` = 1')->select();
        $this->assign('adspace',$adspace);
    }

    protected function search()
    {
        $where = $_POST;
        $where = spellSearch($_POST);
        return $where;
    }

    protected function beforeIndex($list)
    {
        if (!empty($list)) {
            $adspaceModel = D('adspace');
            foreach ($list as $key => $val) {
                $list[$key]['adspace_name'] = $adspaceModel->where('`id` = '.$val['adspace_id'])->getField('name');
            }
            return $list;
        }else {
            return $list;
        }
    }

    protected function beforeAdd()
    {
        $adspaceModel = D('adspace');
        $adspaceList = $adspaceModel->where('`status` = 1')->select();
        $this->assign('adspace',$adspaceList);
    }

    protected function doAdd()
    {
        $ad = $_POST['ad'];
        $img = $_FILES['img'];
        $upload = new Upload(C('UPLOAD_CONFIG'));
        $info = $upload->uploadOne($img);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
            $ad['img'] = $info['savepath'].$info['savename'];
        }
        $this->data = array_merge(array(),$ad);
    }

    protected function beforeEdit()
    {
        $adspaceModel = D('adspace');
        $adspaceList = $adspaceModel->where('`status` = 1')->select();
        $this->assign('adspace',$adspaceList);
    }

    protected function doEdit()
    {
        $ad = $_POST['ad'];
        if (!empty($_FILES['img']['tmp_name'])) {
            $img = $_FILES['img'];
            $upload = new Upload(C('UPLOAD_CONFIG'));
            $info = $upload->uploadOne($img);
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                $ad['img'] = $info['savepath'].$info['savename'];
            }
        }
        $this->data = array_merge(array(),$ad);
    }

}