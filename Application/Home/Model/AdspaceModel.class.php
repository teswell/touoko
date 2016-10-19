<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/10
 * Time: 16:58
 */

namespace Home\Model;


use Think\Model;

class AdspaceModel extends Model
{
    //自动验证
    protected $_validate = array(
        array('name','require','广告位不能为空！'),
        array('status','require','状态不能为空！'),
    );
}