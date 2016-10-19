<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/18
 * Time: 16:27
 */

namespace Home\Controller;



class UserController extends TseController
{
    protected function beforeIndex($list)
    {
        if (!empty($list)) {
            $areaModel = M('area');
            $cityModel = M('city');
            $provinceModel = M('province');

            foreach ($list as $key => $val) {
                $cityid = $areaModel->where('`areaid` = '.$val['areaid'])->getField('father');
                $provinceid = $cityModel->where('`cityid` = '.$cityid)->getField('father');
                $list[$key]['area'] = $areaModel->where('`areaid` = '.$val['areaid'])->getField('area');
                $list[$key]['city'] = $cityModel->where('`cityid` = '.$cityid)->getField('city');
                $list[$key]['province'] = $provinceModel->where('`provinceid` = '.$provinceid)->getField('province');
            }
        }
        return $list;
    }

}