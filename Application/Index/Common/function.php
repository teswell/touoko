<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/29
 * Time: 10:20
 */


/**
 * 验证码检测
 * @param $code
 * @param string $id
 * @return bool
 */
function check_verify($code, $id = '')
{
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}

/**
 * 把array条件 拼接成字符串类型
 * @param array $where
 * @return string
 */
function spellSearch($where = array())
{
    if (!empty($where)) {
        $result = '`id` > 0';
        foreach ($where as $key => $value) {
            if (!empty($value)) {
                if ($num = strpos($key,'__')) {
                    $field = substr($key,0,$num);
                    $symbol = substr($key,$num+2);
                    if ($symbol == 'LIKE') {
                        $result .= " AND `$field` ".$symbol.' '."'%$value%'";
                    }elseif ($symbol == 'IN') {
                        $result .= " AND `$field` ".$symbol.' '."($value)";
                    }else {
                        $result .= " AND `$field` ".$symbol.' '."'$value'";
                    }
                }else {
                    $result .= " AND `$key` = "."'$value'";
                }
            }
        }
        return $result;
    }
}

/**
 * 判断是否是ajax请求
 * @return bool
 */
function isAjax()
{
    // php 判断是否为 ajax 请求  http://www.cnblogs.com/sosoft/
    if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"])=="xmlhttprequest"){
        // ajax 请求的处理方式
        return true;
    }else{
        // 正常请求的处理方式
        return false;
    };
}