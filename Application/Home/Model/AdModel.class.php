<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/10
 * Time: 17:00
 */

namespace Home\Model;


use Think\Model;

class AdModel extends Model
{
    //自动验证
    protected $_validate = array(
        array('title','require','广告名称不能为空！'),
        array('adspace_id','require','对应广告位不能为空！'),
        array('url','require','url不能为空！'),
        array('status','require','状态不能为空！'),
    );
}