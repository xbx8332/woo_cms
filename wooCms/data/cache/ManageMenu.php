<?php
return array (
  'threaded' => 
  array (
    1 => 
    array (
      3 => 
      array (
        4 => 
        array (
        ),
        5 => 
        array (
        ),
      ),
    ),
  ),
  'children' => 
  array (
    1 => 
    array (
      0 => 3,
    ),
    3 => 
    array (
      0 => 4,
      1 => 5,
    ),
    4 => 
    array (
    ),
    5 => 
    array (
    ),
  ),
  'nav' => 
  array (
    3 => 
    array (
      4 => 
      array (
      ),
      5 => 
      array (
      ),
    ),
  ),
  'nav_children' => 
  array (
    3 => 
    array (
      0 => 4,
      1 => 5,
    ),
    4 => 
    array (
    ),
    5 => 
    array (
    ),
  ),
  'list' => 
  array (
    1 => 
    array (
      'id' => 1,
      'parent_id' => 0,
      'title' => '用户导航',
      'ex_title' => '',
      'icon' => '',
      'module' => '',
      'controller' => '',
      'action' => '',
      'args' => '',
      'target' => '',
      'image' => '',
      'is_nav' => 0,
      'tips' => '',
      'summary' => '',
      'list_order' => 0,
      'created' => '2018-03-15 11:30:13',
      'modified' => '2018-03-15 11:30:13',
    ),
    3 => 
    array (
      'id' => 3,
      'parent_id' => 1,
      'title' => '个人设置',
      'ex_title' => '',
      'icon' => 'fa fa-heart',
      'module' => 'manage',
      'controller' => '',
      'action' => '',
      'args' => '',
      'target' => '',
      'image' => '',
      'is_nav' => 1,
      'tips' => '',
      'summary' => '',
      'list_order' => 0,
      'created' => '2018-03-15 11:30:13',
      'modified' => '2018-05-11 12:09:36',
    ),
    4 => 
    array (
      'id' => 4,
      'parent_id' => 3,
      'title' => '个人信息',
      'ex_title' => '',
      'icon' => 'fa fa-etsy',
      'module' => 'manage',
      'controller' => 'Member',
      'action' => 'info',
      'args' => '',
      'target' => '',
      'image' => '',
      'is_nav' => 1,
      'tips' => '',
      'summary' => '',
      'list_order' => 0,
      'created' => '2018-03-15 11:31:26',
      'modified' => '2018-03-28 14:20:10',
    ),
    5 => 
    array (
      'id' => 5,
      'parent_id' => 3,
      'title' => '修改密码',
      'ex_title' => '',
      'icon' => 'fa fa-lock',
      'module' => 'manage',
      'controller' => 'User',
      'action' => 'updatePassword',
      'args' => '',
      'target' => '',
      'image' => '',
      'is_nav' => 1,
      'tips' => '',
      'summary' => '',
      'list_order' => 0,
      'created' => '2018-03-15 11:40:45',
      'modified' => '2018-03-15 11:43:36',
    ),
  ),
  'query' => 
  array (
    'manage/member/info' => 
    array (
      4 => 
      array (
      ),
    ),
    'manage/user/updatepassword' => 
    array (
      5 => 
      array (
      ),
    ),
  ),
)
?>