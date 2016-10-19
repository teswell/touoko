<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/31
 * Time: 11:14
 */

namespace Index\Controller;


use Index\Common\TseConst;

class IndexController extends TseController
{
    /**
     * 首页
     */
    public function index()
    {
        //实例化常量配置类
        $tse = new TseConst();
        //首页广告
        $adModel = M('ad');
        $adList = $adModel->where('`status` = 1 AND `adspace_id` = '.$tse::INDEXTOPBANNER)->select();
        //首页推荐的房屋  目前规则按照时间排ID排倒叙  取九个
        $houseModel = M('house');
        $roomModel = M('room');
        $house = $houseModel->where('`status` = 1')->order('`id` DESC')->limit(9)->field('id,title,img,address')->select();
        foreach ($house as $key=>$value) {
            $room = $roomModel->where('`house_id` = '.$value['id'])->field('price')->select();
            if (!empty($room)) {
                $price = array();
                foreach ($room as $k=>$v) {
                    $price[] = $v['price'];
                }
                $house[$key]['min_price'] = min($price);
                $house[$key]['max_price'] = max($price);
            }
        }
        $this->assign('ad',$adList);
        $this->assign('house',$house);
        $this->display();
    }

}