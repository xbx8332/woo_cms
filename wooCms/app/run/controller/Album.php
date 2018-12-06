<?php
namespace app\run\controller;

use app\common\controller\Run;

class Album extends Run
{
    public function initialize()
    {
        
        call_user_func(array('parent',__FUNCTION__)); 
    }
    
    public function lists()
    {
        $this->local['filter'] = [
            'title',
            'menu_id',
            'date'
        ];
        
        $this->local['list_fields'] = [
            'title',
            'menu_id',
            'image',
            'date',
            //'user_id',
            'is_verify',
            'is_index'
        ];
        call_user_func(array('parent', __FUNCTION__));
    }    
    
    public function create()
    {
        $this->assignDefault('date',date('Y-m-d'));
        $this->assignDefault('list_order',0);
        call_user_func(array('parent', __FUNCTION__));
    } 
    
    public function modify()
    {
        $this->mdl->form['created']['elem'] = 'format';
        $this->mdl->form['modified']['elem'] = 'format';
        call_user_func(array('parent', __FUNCTION__));
    }    
}
