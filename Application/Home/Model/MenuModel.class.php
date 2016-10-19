<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/1
 * Time: 15:07
 */

namespace Home\Model;


use Think\Model;

class MenuModel extends Model
{
    protected $tableName = 'admin_menu';

    //自动验证
    protected $_validate = array(
        array('name','require','菜单名称不能为空！'),
        array('sort','require','排序不能为空！'),
        array('status','require','状态不能为空！'),
        array('parent_id','require','父级ID不能为空！'),
        array('level','require','等级不能为空！'),
    );
}