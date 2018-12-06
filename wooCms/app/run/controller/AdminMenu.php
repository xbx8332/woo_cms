<?php
namespace app\run\controller;

use app\common\controller\Run;

class AdminMenu extends Run
{
    //初始化 需要调父级方法
    public function initialize()
    {
        call_user_func(['parent', __FUNCTION__]);
    }

    //列表 
    public function lists()
    {
        if ($this->args['list'] == 'list') {
            $this->local['list_fields'] = [
                'title',
                'parent_id',
                'url',
                'list_order'
            ];
            $this->local['where'][] = ['id', 'gt', 1];
            $this->local['order'] = array('list_order' => 'ASC', 'id' => 'ASC');
            call_user_func(array('parent', __FUNCTION__));
            $this->addAction("树形列表", array('AdminMenu/lists', ['parent_id' => 1]), 'fa-eye');

        } else {
            $this->addAction("新增一级{$this->mdl->cname}", array('AdminMenu/create', ['parent_id' => 1]), 'fa-plus-circle', 'layer-ajax-form layui-btn');
            $this->addAction("一级{$this->mdl->cname}排序", array('AdminMenu/sort', ['parent_id' => 1]), 'fa-sort', 'layer-ajax-form layui-btn-warm');
            //$this->addAction("线型列表", array('AdminMenu/lists', array('list' => 'list')), 'fa-eye');
            $this->setTitle("{$this->mdl->cname}结构", 'operation');
            $this->fetch = 'tree';
        }
    }
    
    public function sort()
    {
        $this->local['order'] = ['list_order' => 'ASC', 'id' => 'ASC'];
        if (empty($this->args)) {
            $this->args['parent_id'] = 1;
        }
        call_user_func(array('parent', __FUNCTION__));
    }

    //添加
    public function create()
    {
        call_user_func(['parent', __FUNCTION__]);
    }

    //修改
    public function modify()
    {
        call_user_func(['parent', __FUNCTION__]);
    }

    //删除
    public function delete()
    {
        call_user_func(['parent', __FUNCTION__]);
    }
}
