<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 只能在系统按照前修改加盐值，安装之后修改会导致已有用户密码无法识别
    'salt' => '123456',
    // 默认登录session名，如果不分session全部设置为一样， 可以开发过程中修改
    'default_name' => 'default',
    // home模块登录session名
    'home_name' => 'default',
    // manage模块登录session名
    'manage_name' => 'default',
    // run模板登录session名
    'run_name' => 'default',
    // addon插件登录session名
    'addon_name' => 'default',
    // 如果开发过程中有自己创建的模块可以按：  模块名_name  来区别开当前模型的session命，默认使用default_name
    // .....    
    
    
    // 系统默认情况下，每个URL请求的地址都必须登录才允许方法
    // 如果是自己创建的模块，需要达到整个模块都可以不登录也能访问的效果，在下面配置中加入你的模块名
    // 具体规则可以查看开发手册Auth
    'allow_module' => ['home', 'install'],
    // 如果要实现当前账号在其他地方登录以后，本机账号自动退出功能 时时刷新需要开启
    'refresh_anytime' => false
];
