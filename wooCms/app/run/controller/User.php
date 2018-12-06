<?php

namespace app\run\controller;

use app\common\controller\Run;
use woo\utility\Hash;

class User extends Run
{
    public function initialize()
    {
        helper('Auth')->allow(['login', 'ajax_login']);
        parent::initialize();
    }
    
    public function login()
    {
        $this->assign->addCss('admin/login');
        $this->assign->addCss('/files/loaders/loaders');
        $this->assign->addJs('jquery.easing.1.3');
        $this->assign->addJs('/files/loaders/loaders.css.js');
        $this->fetch = 'login';
    }
    
    public function ajax_login()
    {
        if (!$this->request->isAjax()) {
            return $this->message('error', '不是一个正确的请求方式'); 
        }
        if (!captcha_check(input('post.captcha'))) {
            return $this->ajax('error', '亲！验证码错误了哦');
        }
        
        $redirect = session('REFERER') ? session('REFERER') : url('run/Index/index');
        if (strpos($redirect, 'run/') === false) {
            $redirect = url('run/Index/index');
        }
        
        helper('Auth')->login();
        $logined = helper('Auth')->user();
        if ($logined) {
            if ($logined['status'] == 'verified') {
                //登录成功
                \Hook::listen('login', $logined);
                return $this->ajax('success', '<span style="color:#0d957a;">登录成功，页面即将跳转...</span>',['url' => $redirect]);
                
            } elseif ($logined['status'] == 'unverified') {
                helper('Auth')->logout();
                return $this->ajax('error', '用户名未激活');
            } else {
                helper('Auth')->logout();
                return $this->ajax('error', '用户名已禁用');
            }
        } else {
            return $this->ajax('error', '亲！用户名或者密码有误');
        }
    }    

    public function logout()
    {
        if (helper('Auth')->user('id')) {
            helper('Auth')->logout();
        }
        $this->redirect('User/login');
    }

    public function modify()
    {
        $this->assignDefault('password', '');
        $this->mdl->form['password']['info'] = '不修改请保持为空';
        call_user_func(array('parent', __FUNCTION__));
    }

    public function lists()
    {
        $this->local['filter'] = [
            'username',
            'status',
            'user_group_id',
            'truename' => [
                'name' => '真实姓名',
                'where' => function($val) {
                    $this->loadModel('Member');
                    $list = $this->Member->where('truename', 'LIKE', $val . '%')->field(['id', 'user_id'])->select()->toArray();                    
                    if (!empty($list)) {
                        $list = Hash::combine($list, '{n}.id', '{n}.user_id');
                        return ['id', 'IN', $list];
                    } else {
                        return ['id', 'IN', [0]];
                    }
                }
            ]
        ];

        $this->local['list_fields'] = array(
            'username',
            'user_group_id',
            'user_grade_id',
            'Member.truename',
            'status',
            'logined_ip',
            'user_score_sum',
            'logined',
            'created'
        );
        $this->addItemAction('查看积分', array('UserScore/lists', ['parent_id' => 'id'], 'parse' => ['parent_id']), '&#xe60a;', 'layui-btn');
        $this->addItemAction('用户信息', array('Member/modify', ['parent_id' => 'id'], 'parse' => ['parent_id']), 'fa-user', 'layer-ajax-form layui-btn-success');
        call_user_func(array('parent', __FUNCTION__));
        $this->addAction("登录日志", array('UserLogin/lists'), 'fa-eye');
    }
}
