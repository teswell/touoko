<?php

namespace Home\Common;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/18
 * Time: 13:51
 */
class TseConst {

    //房间类型配置
    public static $roomType = array(
        array('key'=>1,'val'=>'飘窗'),
        array('key'=>2,'val'=>'阳台'),
        array('key'=>3,'val'=>'独卫'),
        array('key'=>4,'val'=>'两人'),
        array('key'=>5,'val'=>'空调'),
    );

    //房子类型配置
   public static $houseType = array(
       array('key'=>1,'val'=>'单间'),
       array('key'=>2,'val'=>'主卧带独卫'),
       array('key'=>3,'val'=>'标间套一'),
       array('key'=>4,'val'=>'整租'),
   );

    const ADMINISTRATION = -1;//超级管理员的type
    const HOUSEKEEPER = 5;  //uoko管家在position中的ID

}