<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/8
 * Time: 16:16
 */

namespace Index\Controller;


use Think\Page;

class RentController extends TseController
{
    public function index()
    {
        $houseModel = M('house');
        $roomModel = M('room');

        //搜索栏数据准备
        $this->beforeIndex();
        $where = '`status` = 1';

        //**************搜索开始**************//
        $isEmpty = 0;
        if (!empty($_POST['search'])) {
            $keyword = $_POST['search']['keyword'];
            $where .= " AND `title` LIKE '%$keyword%'";
            $isEmpty ++;
        }//关键字搜索

        if (!empty($_GET['area']) && $_GET['area'] != 'all') {
            $_SESSION['search']['area'] = $_GET['area'];
            $isEmpty ++;
        }//区域搜索

        if (!empty($_GET['money']) && $_GET['money'] != 'all') {
            $_SESSION['search']['money'] = $_GET['money'];
            $isEmpty ++;
        }//房间金额

        if (!empty($_GET['type'] && $_GET['type'] != 'all')) {
            $_SESSION['search']['type'] = $_GET['type'];
            $isEmpty ++;
        }//房间类型

        if ($isEmpty == 0) {
            unset($_SESSION['search']);
        }//初始化搜索条件

        if (!empty($_SESSION['search'])) {
            foreach ($_SESSION['search'] as $key=>$value) {
                if ($key == 'area') {
                    $where .= " AND `area_id` = $value";
                }elseif ($key == 'type') {
                    $where .= " AND `type` LIKE '%$value%'";
                }elseif ($key == 'money') {
                    if ($value == 1) {
                        $min = 500;$max = 700;
                    }elseif ($value == 2) {
                        $min = 700;$max = 1000;
                    }elseif ($value == 3) {
                        $min = 1000;$max = 1500;
                    }elseif ($value == 4) {
                        $min = 1500;$max = 2000;
                    }elseif ($value == 5) {
                        $min = 2000;$max = 10000;
                    }
                    $ids = $roomModel->where("`price` BETWEEN $min AND $max")->field('house_id')->select();
                    $houseIds = array();
                    if (!empty($ids)) {
                        foreach ($ids as $key => $value) {
                            if (!($key > 0 && $value['house_id'] == $ids[$key-1]['house_id'])) {
                                $houseIds[] = $value['house_id'];;
                            }
                        }
                        $houseIds = implode(',',$houseIds);
                    }
                    $where .= " AND `id` in ($houseIds)";
                }
            }
        }
        //**************搜索结束**************//
        $count = $houseModel->where($where)->count();
        $page = new Page($count,9);
        $show = $page->show();
        $house = $houseModel->where($where)->order('`id` DESC')->limit($page->firstRow.','.$page->listRows)->select();
        foreach ($house as $key=>$value){
            //查询房子的价格区间
            $room = $roomModel->where('`house_id` = '.$value['id'])->field('price')->select();
            $price = array();
            if (!empty($room)) {
                foreach ($room as $v) {
                    $price[] = $v['price'];
                }
                $house[$key]['min_price'] = min($price);
                $house[$key]['max_price'] = max($price);
            }
        }
        //管家推荐商户
        $promotion = $houseModel->where('`status` = 1')->order('`id` ASC')->limit(6)->select();
        foreach ($promotion as $key=>$value) {
            //查询房子的价格区间
            $room = $roomModel->where('`house_id` = '.$value['id'])->field('price')->select();
            $price = array();
            if (!empty($room)) {
                foreach ($room as $v) {
                    $price[] = $v['price'];
                }
                $promotion[$key]['min_price'] = min($price);
                $promotion[$key]['max_price'] = max($price);
            }
        }
        $this->assign('promotion',$promotion);
        $this->assign('house',$house);
        $this->assign('page',$show);
        $this->display();
    }

    private function beforeIndex()
    {
        $areaModel = M('area');
        //只要成都的数据
        $area = $areaModel->where('`father` = 510100')->select();
        $this->assign('area',$area);
    }


    public function detail()
    {
        if ($_GET['id']) {
            $houseId = $_GET['id'];
            $houseModel = M('house');
            $roomModel = M('room');
            $areaModel = M('area');

            $houseImgsModel = M('house_imgs');
            $house = $houseModel->where('`id` = '.$houseId)->find();//房子信息
            $house['area_name'] = $areaModel->where('`areaid` = '.$house['area_id'])->getField('area');
            $rooms = $roomModel->where('`house_id` = '.$houseId.' AND `status` != -1')->select();//房间信息
            //查询房子的价格区间
            $price = array();
            if (!empty($rooms)) {
                foreach ($rooms as $k=>$v) {
                    $rooms[$k]['type'] = explode(',',$v['type']);
                    $price[] = $v['price'];
                }
                $house['min_price'] = min($price);
                $house['max_price'] = max($price);
            }
            $houseImgs = $houseImgsModel->where('`house_id` = '.$houseId)->select();//房子图片详情
            $this->assign('houseImgs',$houseImgs);
            $this->assign('house',$house);
            $this->assign('room',$rooms);
            $this->display();
        }else {

        }
    }

    /**
     * 用户预约看房
     */
    public function ajaxRent()
    {
        $taskModel = M('task');
        $data = array(
            'name' => $_POST['name'],
            'mobile' => $_POST['tel'],
            'sex' => $_POST['sex'],
            'number' => $_POST['people'],
            'extra' => $_POST['remarks'],
            'house_id' => $_POST['house_id'],
            'area_id' => $_POST['area_id'],
            'status' => 1,
            'submit_time' => time()
        );
        $taskModel->add($data);
    }

}


//w20  n40