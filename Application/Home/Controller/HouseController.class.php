<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/16
 * Time: 10:11
 */

namespace Home\Controller;


use Think\Upload;

class HouseController extends TseController
{
    protected function search()
    {
        $where = $_POST;
        $where = spellSearch($where);
        return $where;
    }

    protected function beforeIndex($list)
    {
        if (!empty($list)) {
            foreach ($list as $key=>$val) {
                $list[$key]['type'] = str_replace('1','单间',$val['type']);
                $list[$key]['type'] = str_replace('2','主卧带独卫',$list[$key]['type']);
                $list[$key]['type'] = str_replace('3','标间套一',$list[$key]['type']);
                $list[$key]['type'] = str_replace('4','整租',$list[$key]['type']);
            }
        }
        return $list;
    }

    protected function beforeAdd()
    {
        $provinceModel = M('province');
        $province = $provinceModel->select();
        $this->assign('province',$province);
    }

    protected function doAdd()
    {
        $house = $_POST['house'];
        $img = $_FILES['img'];
        $upload = new Upload(C('UPLOAD_CONFIG'));
        $info = $upload->uploadOne($img);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
            $house['img'] = $info['savepath'].$info['savename'];
        }
        $house['type']? $house['type']=implode(',',$house['type']):$house['type']=' ';
        $this->data = array_merge(array(),$house);
    }

    protected function beforeEdit()
    {
        $houseModel = D('house');
        $areaModel = M('area');
        $cityModel = M('city');
        $provinceModel = M('province');
        $areaid = $houseModel->where('`id` = '.$_GET['id'])->getField('area_id');
        $cityid = $areaModel->where('`areaid` = '.$areaid)->getField('father');
        $provinceid = $cityModel->where('`cityid` = '.$cityid)->getField('father');

        $provinceList =  $provinceModel->select();
        $cityList = $cityModel->where('`father` = '.$provinceid)->select();
        $areaList = $areaModel->where('`father` = '.$cityid)->select();

        $this->assign('province',$provinceList);
        $this->assign('city',$cityList);
        $this->assign('area',$areaList);
        $this->assign('provinceid',$provinceid);
        $this->assign('cityid',$cityid);
        $this->assign('areaid',$areaid);
    }

    protected function doEdit()
    {
        $house = $_POST['house'];
        if (!empty($_FILES['img']['tmp_name'])) {
            $img = $_FILES['img'];
            $upload = new Upload(C('UPLOAD_CONFIG'));
            $info = $upload->uploadOne($img);
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                $house['img'] = $info['savepath'].$info['savename'];
            }
        }
        $house['type']? $house['type']=implode(',',$house['type']):$house['type']=' ';
        $this->data = array_merge(array(),$house);
    }

    public function img_add()
    {
        $imgModel = M('houseImgs');
        if ($_FILES) {
            if (!empty($_FILES['fileList']['tmp_name'])) {
                $img = $_FILES['fileList'];
                $upload = new Upload(C('UPLOAD_CONFIG'));
                $info = $upload->uploadOne($img);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                    $houseImg['img'] = $info['savepath'].$info['savename'];
                }
                $houseImg['house_id'] = $_SESSION['adminHouseId'];
                $imgModel->add($houseImg);
            }
        }else {
            session('adminHouseId',$_GET['id']);
            $imgs = $imgModel->where('`house_id` = '.$_GET['id'])->select();
            $this->assign('imgs',$imgs);
            $this->display('img_add');
        }
    }

    /**
     * ajax删除
     */
    public function img_delete()
    {
        if ($_POST['id']) {
            $this->model = M('houseImgs');
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

}