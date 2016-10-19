<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/19
 * Time: 14:56
 */

namespace Home\Controller;


use Home\Common\TseConst;

class TaskController extends TseController
{
    protected function search()
    {
        //区分任务(未处理,待处理)
        $status = $_GET['status'];
        if ($_GET['status']) session('task_status',$_GET['status']);
        $where = '`status` = '.$status;
        if ($status == 1) {
            $this->assign('status',1);
        }else {
            $this->assign('status',-1);
        }
        //当前管家的任务或者超级管理员查看任务
        $adminModel = D('admin');
        $username = $_SESSION['username'];
        $positionId = $adminModel->where("`username` = '$username'")->getField('position_id');
        $adminId = $adminModel->where("`username` = '$username'")->getField('id');
        $tse = new TseConst();
        if ($positionId == $tse::ADMINISTRATION) {//超级管理员
            $this->assign('position_id',$positionId);
            return $where;
        }elseif ($positionId == $tse::HOUSEKEEPER) {//管家
            $where .= ' AND `house_keeper` = '.$adminId;
            $this->assign('position_id',$positionId);
            return $where;
        }else {
            //跳转没有权限的页面
        }

    }

    protected function beforeIndex($list)
    {
        if(!empty($list)) {
            $houseModel = M('house');
            $adminModel = M('admin');
            foreach ($list as $key=>$value) {
                $list[$key]['house'] = $houseModel->where('`id` = '.$value['house_id'])->getField('title');
                $list[$key]['finish_username'] = $adminModel->where('`id` = '.$value['house_keeper'])->getField('username');
            }
        }
        return $list;
    }

    public function administration()
    {
        $taskModel = M('task');
        if ($_POST) {
            $logModel = M('task_log');

            $task = $_POST['administration'];
            $log = $_POST['log'];
            $log['time'] = time();
            $log['user'] = $_SESSION['username'];
            $log['type'] = 1;
            $taskResult = $taskModel->save($task);
            $logResult = $logModel->add($log);
            if ($taskResult && $logResult) {
                $this->redirect('/home/task/index/status/'.$_SESSION['task_status']);
            }else {
                $this->error('编辑失败','administration/id/'.$task['id'],1);
            }
        }else {
            if ($_GET['id']) {
                $adminModel = D('admin');
                $logModel = M('task_log');
                $tse = new TseConst();
                $keeper = $adminModel->where('`position_id` = '.$tse::HOUSEKEEPER)->select();
                $info = $taskModel->where('`id` = '.$_GET['id'])->find();
                $houseModel = M('house');
                $info['house_title'] = $houseModel->where('`id` = '.$info['house_id'])->getField('title');
                $log = $logModel->where('`task_id` = '.$_GET['id'])->order('`time` ASC')->select();
                $this->assign('log',$log);
                $this->assign('keeper',$keeper);
                $this->assign('info',$info);
                $this->display();
            }else {
                $this->error('操作失败,没接收到ID');
            }
        }
    }

    public function keeper()
    {
        $taskModel = M('task');
        if ($_POST) {
            $logModel = M('task_log');

            $task = $_POST['keeper'];
            $task['finish_time'] = time();
            $log = $_POST['log'];
            $log['time'] = time();
            $log['user'] = $_SESSION['username'];
            $log['type'] = $task['status'];
            $taskResult = $taskModel->save($task);
            $logResult = $logModel->add($log);
            if ($taskResult && $logResult) {
                $this->redirect('/home/task/index/status/'.$_SESSION['task_status']);
            }else {
                $this->error('编辑失败','administration/id/'.$task['id'],1);
            }
        }else {
            if ($_GET['id']) {
                $adminModel = D('admin');
                $logModel = M('task_log');
                $info = $taskModel->where('`id` = '.$_GET['id'])->find();
                $houseModel = M('house');
                $info['house_title'] = $houseModel->where('`id` = '.$info['house_id'])->getField('title');
                $info['keeper_name'] = $adminModel->where('`id` = '.$info['house_keeper'])->getField('username');
                $log = $logModel->where('`task_id` = '.$_GET['id'])->order('`time` ASC')->select();
                $this->assign('log',$log);
                $this->assign('info',$info);
                $this->display();
            }else {
                $this->error('操作失败,没接收到ID');
            }
        }
    }
}