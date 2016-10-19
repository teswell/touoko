<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/28
 * Time: 16:58
 */

namespace Home\Controller;


use Think\Controller;
use Think\Verify;

class AthController extends Controller
{
    /**
     * 生成验证码
     */
    public function verify()
    {
        $config =    array(
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
            'useCurve'    =>    false, // 关闭验证码混淆曲线
        );
        $verify = new Verify($config);
        $verify->entry();
    }

    public function threeAjax()
    {
        if ($_POST['provinceid']) {
            $cityModel = M('city');
            $list = $cityModel->where('`father` = '.$_POST['provinceid'])->select();
            return $this->ajaxReturn(array('status'=>1,'list'=>$list));
        }elseif ($_POST['cityid']) {
            $areaModel = M('area');
            $list = $areaModel->where('`father` = '.$_POST['cityid'])->select();
            return $this->ajaxReturn(array('status'=>1,'list'=>$list));
        }elseif ($_POST['areaid']) {
            $zoneModel = D('zone');
            $list = $zoneModel->where('`father` = '.$_POST['areaid'])->select();
            return $this->ajaxReturn(array('status'=>1,'list'=>$list));
        }
    }
}