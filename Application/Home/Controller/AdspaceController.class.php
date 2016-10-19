<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/10
 * Time: 16:35
 */

namespace Home\Controller;


class AdspaceController extends TseController
{
    protected function doAdd()
    {
        $this->data = $_POST['adspace'];
    }

    protected function doEdit()
    {
        $this->data = $_POST['adspace'];
    }
}