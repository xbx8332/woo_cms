<?php /* Smarty version 3.1.27, created on 2018-12-06 17:25:28
         compiled from "D:\phpStudy1\WWW\wooCms\app\run\view\Index\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:254075c08eb0861a832_88046818%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c7032f62cc5339665261a1fa86faf00e84889eb' => 
    array (
      0 => 'D:\\phpStudy1\\WWW\\wooCms\\app\\run\\view\\Index\\index.html',
      1 => 1540908619,
      2 => 'file',
    ),
    '1b8ed8bac72c557fcedfdcbce3e8799fa939582f' => 
    array (
      0 => 'D:\\phpStudy1\\WWW\\wooCms\\app\\run\\view\\base.html',
      1 => 1539825038,
      2 => 'file',
    ),
    'f869cb4e94ee3aed259cffc0b90a09b4c42773ca' => 
    array (
      0 => 'D:\\phpStudy1\\WWW\\wooCms\\app\\run\\view\\global.html',
      1 => 1540132016,
      2 => 'file',
    ),
    'bbc28adafa389cf1176576f4c90b9c75060a78cf' => 
    array (
      0 => 'D:\\phpStudy1\\WWW\\wooCms\\app\\run\\view\\functions.html',
      1 => 1537157558,
      2 => 'file',
    ),
    '97c7c8b3e6f668ba593198593e2da907857e3992' => 
    array (
      0 => '97c7c8b3e6f668ba593198593e2da907857e3992',
      1 => 0,
      2 => 'string',
    ),
    '9271058aa51747a1ec87e5c8d9bb08ea3d3363a2' => 
    array (
      0 => '9271058aa51747a1ec87e5c8d9bb08ea3d3363a2',
      1 => 0,
      2 => 'string',
    ),
    '4d7122d0ff577f6dadd2e45a681cffaf1053da7e' => 
    array (
      0 => '4d7122d0ff577f6dadd2e45a681cffaf1053da7e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '254075c08eb0861a832_88046818',
  'variables' => 
  array (
    'is_response' => 0,
    'meta' => 0,
    'is_favicon' => 0,
    'root' => 0,
    'css' => 0,
    'html' => 0,
    'absroot' => 0,
    'params' => 0,
    'js' => 0,
    'deferJs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c08eb08802030_21234801',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy1\\WWW\\wooCms\\runtime\\temp\\0c7032f62cc5339665261a1fa86faf00e84889eb_1.file.index.html.php',
      'uid' => 'bbc28adafa389cf1176576f4c90b9c75060a78cf',
      'call_name' => 'smarty_template_function_url_10765c08eb08694638_94436442',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy1\\WWW\\wooCms\\runtime\\temp\\0c7032f62cc5339665261a1fa86faf00e84889eb_1.file.index.html.php',
      'uid' => 'bbc28adafa389cf1176576f4c90b9c75060a78cf',
      'call_name' => 'smarty_template_function_furl_10765c08eb08694638_94436442',
    ),
    'menu_link' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy1\\WWW\\wooCms\\runtime\\temp\\0c7032f62cc5339665261a1fa86faf00e84889eb_1.file.index.html.php',
      'uid' => 'bbc28adafa389cf1176576f4c90b9c75060a78cf',
      'call_name' => 'smarty_template_function_menu_link_10765c08eb08694638_94436442',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c08eb08802030_21234801')) {
function content_5c08eb08802030_21234801 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:\\phpStudy1\\WWW\\wooCms\\include\\smarty-3.1.27\\libs\\plugins\\function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '254075c08eb0861a832_88046818';
?>
<!DOCTYPE html>
<html lang="zh-cn" >
<head>
<?php $_smarty_tpl->tpl_vars['form'] = new Smarty_Variable(helper('Form'), null, 0);
$_smarty_tpl->tpl_vars['html'] = new Smarty_Variable(helper('Html'), null, 0);?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if ($_smarty_tpl->tpl_vars['is_response']->value) {?>
<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport"/>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
<meta name="renderer" content="webkit"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="format-detection" content="telephone=no, email=no" />
<?php }?>
<meta name="Keywords" content="<?php if ($_smarty_tpl->tpl_vars['meta']->value['keywords']) {
echo implode(',',$_smarty_tpl->tpl_vars['meta']->value['keywords']);
}?>" />
<meta name="Description" content="<?php if ($_smarty_tpl->tpl_vars['meta']->value['description']) {
echo implode(',',$_smarty_tpl->tpl_vars['meta']->value['description']);
}?>" />
<?php if ($_smarty_tpl->tpl_vars['is_favicon']->value) {?><link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
favicon.ico" /><?php }?>
<title><?php echo implode(' - ',(($tmp = @$_smarty_tpl->tpl_vars['meta']->value['title'])===null||$tmp==='' ? array() : $tmp));?>
</title>
<?php echo $_smarty_tpl->tpl_vars['html']->value->css($_smarty_tpl->tpl_vars['css']->value,true);?>


<?php echo '<script'; ?>
 type="text/javascript">var wwwroot='<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
';var absroot='<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
';var module='<?php echo $_smarty_tpl->tpl_vars['params']->value['module'];?>
';<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['js']->value,true);?>


<?php /*  Call merged included template "functions.html" */
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '10765c08eb08694638_94436442', 'content_5c08eb08694634_33112466');
/*  End of included template "functions.html" */?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '254075c08eb0861a832_88046818';
?>

<?php echo '<script'; ?>
 type="text/javascript">
var layer;
var is_layer_loading = <?php echo (($tmp = @setting('is_layer_loading'))===null||$tmp==='' ? 0 : $tmp);?>
;
$(function(){
    layui.use(['layer'], function(){
        layer = layui.layer;        
        layer.config({
            zIndex:10000
        });
        
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
          layer.msg('<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
',{
            offset :['50px', '35%']
          });
        <?php }?>
    })
})

HKUC.ajax_request.defaultSuccessHandlers= {
    'success':function(rslt_msg,rslt_data){ 
       layer.alert(rslt_msg,{
            icon:1
        }); 
    },
    'error':function(rslt_msg,rslt_data){
        layer.alert(rslt_msg,{
            icon:2
        });                   
    },
    'nopower':function(msg,data){
        
        layer.alert(msg,{
            icon:2
        });
    }
};
HKUC.ajax_request.defaultErrorHandlers={
    403:function(text,rerun){
        layer.alert('登录超时，请刷新重新登录',{
            icon:2
        });
	},
    404:function(text,rerun){
        layer.alert('页面不存在',{
            icon:2
        });
    }
};

<?php echo '</script'; ?>
>


</head>

<body>
<?php
$_smarty_tpl->properties['nocache_hash'] = '254075c08eb0861a832_88046818';
?>

<?php echo '<script'; ?>
 type="text/javascript">
if (window.localStorage) {
    var default_theme = localStorage.getItem('woocms-theme');
    if (default_theme) {
        $('body').addClass(default_theme);
    }
}
var winWidth = $(window).width();
var winHight = $(window).height();
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->tpl_vars['cms_menu'] = new Smarty_Variable((($tmp = @adminmenu('nav'))===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['is_app_debug'] = new Smarty_Variable(config('app_debug'), null, 0);?>
<div id="wooBase">
    <div class="woo-header clearfix">
        <span class="menuBar" id="closeSiderbar"><i class="layui-icon layui-icon-shrink-right"></i></span>
        <div class="header-left" id="topMenu">
            <ul class="grid">
                <?php
$_from = $_smarty_tpl->tpl_vars['cms_menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level0'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level0']->_loop = false;
$_smarty_tpl->tpl_vars['level0_id'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level0']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['level0_id']->value => $_smarty_tpl->tpl_vars['level0']->value) {
$_smarty_tpl->tpl_vars['level0']->_loop = true;
$_smarty_tpl->tpl_vars['level0']->index++;
$foreach_level0_Sav = $_smarty_tpl->tpl_vars['level0'];
?>
                <?php $_smarty_tpl->tpl_vars['is_top_display'] = new Smarty_Variable(true, null, 0);?>
                <?php if (!config('app_debug') && adminmenu($_smarty_tpl->tpl_vars['level0_id']->value,'is_debug')) {
$_smarty_tpl->tpl_vars['is_top_display'] = new Smarty_Variable(false, null, 0);
}?>
                <?php if ($_smarty_tpl->tpl_vars['is_top_display']->value) {?>
                <?php $_smarty_tpl->tpl_vars['is_power'] = new Smarty_Variable(true, null, 0);?>
                <?php if ((adminmenu($_smarty_tpl->tpl_vars['level0_id']->value,'power_tree_id') && !in_array(adminmenu($_smarty_tpl->tpl_vars['level0_id']->value,'power_tree_id'),$_smarty_tpl->tpl_vars['powers']->value)) && !$_smarty_tpl->tpl_vars['is_super_power']->value) {
$_smarty_tpl->tpl_vars['is_power'] = new Smarty_Variable(false, null, 0);
}?>
                <?php if ($_smarty_tpl->tpl_vars['is_power']->value) {?>
                <li><?php echo adminmenu($_smarty_tpl->tpl_vars['level0_id']->value,'title');?>
</li>
                <?php }?>
                <?php }?>
                <?php
$_smarty_tpl->tpl_vars['level0'] = $foreach_level0_Sav;
}
?>
                <li class="current"><i class="fa-globe fa"></i></li>
            </ul>
        </div>
        <div class="header-right">
            <ul class="layui-nav list" >
                <li class="layui-nav-item circle gohome first"><a   href="<?php echo url('Home/Index/index');?>
" target="_blank"><i class="layui-icon layui-icon-website"></i></a></li>
                <li class="layui-nav-item circle"><a class="javascript" rel="full_screen"  href="javascript:void(0);"><i class="layui-icon layui-icon-screen-full"></i></a></li>
                <li class="layui-nav-item circle"><a class="javascript" rel="select_theme"  href=""><i class="layui-icon layui-icon-theme" ></i></a></li>
                <li class="layui-nav-item circle"><a href="javascript:void(0);" class="javascript" rel="top_refresh"><i class="layui-icon layui-icon-refresh" ></i></a></li>
                
                <li class="layui-nav-item">
                    <a href="javascript:;" class="admin-user">
                        <span class="admin-user-headpic"><img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['headimg'])===null||$tmp==='' ? 'images/admin/default_headimg.png' : $tmp);?>
" alt=""/></span><span class="admin-user-name"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['nickname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['login']->value['username'] : $tmp);?>
</span>
                     </a>
                    <dl class="layui-nav-child">
                        <i class="i"></i>
                        <dd><a href="<?php echo url('User/modify',array('id'=>$_smarty_tpl->tpl_vars['login']->value['id']));?>
" class="new_tab" data-icon="fa-user"><i class="fa fa-pencil" aria-hidden="true"></i>修改密码</a></dd>
                        <dd><a href="" class="javascript" rel="lockScreen"><i class="fa fa-lock" aria-hidden="true" style="padding-right: 2px;padding-left: 2px;"></i>锁屏(Alt+L)</a></dd>
                        <dd class="bt"><a href="<?php echo url('User/logout');?>
"><i class="fa fa-sign-out" aria-hidden="true"></i>注销登录</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
    <div class="woo-sider">
        <div class="woo-sider-scroll">
            <div class="woo-logo sizing">
                <h2 class="name">WOO<span class="cms">CMS</span></h2>                
            </div>
            <div class="woo-siderbar"> 
                <ul class="layui-nav layui-nav-tree" lay-shrink="all" lay-unselect>               
                <?php
$_from = $_smarty_tpl->tpl_vars['cms_menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level0'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level0']->_loop = false;
$_smarty_tpl->tpl_vars['level0_id'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level0']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['level0_id']->value => $_smarty_tpl->tpl_vars['level0']->value) {
$_smarty_tpl->tpl_vars['level0']->_loop = true;
$_smarty_tpl->tpl_vars['level0']->index++;
$foreach_level0_Sav = $_smarty_tpl->tpl_vars['level0'];
?>
                <?php if (!$_smarty_tpl->tpl_vars['is_app_debug']->value && adminmenu($_smarty_tpl->tpl_vars['level0_id']->value,'is_debug')) {
continue 1;
}?>
                <?php if ((adminmenu($_smarty_tpl->tpl_vars['level0_id']->value,'power_tree_id') && !in_array(adminmenu($_smarty_tpl->tpl_vars['level0_id']->value,'power_tree_id'),$_smarty_tpl->tpl_vars['powers']->value)) && !$_smarty_tpl->tpl_vars['is_super_power']->value) {
continue 1;
}?>
                
                    <?php
$_from = $_smarty_tpl->tpl_vars['level0']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level1']->_loop = false;
$_smarty_tpl->tpl_vars['level1_id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['level1_id']->value => $_smarty_tpl->tpl_vars['level1']->value) {
$_smarty_tpl->tpl_vars['level1']->_loop = true;
$foreach_level1_Sav = $_smarty_tpl->tpl_vars['level1'];
?>
                    <?php if (!$_smarty_tpl->tpl_vars['is_app_debug']->value && adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'is_debug')) {
continue 1;
}?>                    
                    <?php if ((adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'power_tree_id') && !in_array(adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'power_tree_id'),$_smarty_tpl->tpl_vars['powers']->value)) && !$_smarty_tpl->tpl_vars['is_super_power']->value) {
continue 1;
}?>
                    <li class="layui-nav-item" data-group="<?php echo $_smarty_tpl->tpl_vars['level0']->index;?>
">
                        <a href="<?php echo url(adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'url'));?>
" data-icon="<?php echo adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'icon');?>
"><i  class="fa <?php echo adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'icon');?>
"></i><cite><?php echo adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
</cite></a>
                        <?php if ($_smarty_tpl->tpl_vars['level1']->value) {?> 
                        <dl class="layui-nav-child">
                            <?php
$_from = $_smarty_tpl->tpl_vars['level1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level2'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level2']->_loop = false;
$_smarty_tpl->tpl_vars['level2_id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['level2_id']->value => $_smarty_tpl->tpl_vars['level2']->value) {
$_smarty_tpl->tpl_vars['level2']->_loop = true;
$foreach_level2_Sav = $_smarty_tpl->tpl_vars['level2'];
?>
                            <?php if (!$_smarty_tpl->tpl_vars['is_app_debug']->value && adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'is_debug')) {
continue 1;
}?>                            
                            <?php if ((adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'power_tree_id') && !in_array(adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'power_tree_id'),$_smarty_tpl->tpl_vars['powers']->value)) && !$_smarty_tpl->tpl_vars['is_super_power']->value) {
continue 1;
}?>
                            <dd>
                                <a href="<?php echo url(adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'url'));?>
" data-icon="<?php echo (($tmp = @adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'icon'))===null||$tmp==='' ? adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'icon') : $tmp);?>
"><cite><?php echo adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'title');?>
</cite></a>
                                <?php if ($_smarty_tpl->tpl_vars['level2']->value) {?> 
                                <dl class="layui-nav-child">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['level2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level3'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level3']->_loop = false;
$_smarty_tpl->tpl_vars['level3_id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['level3_id']->value => $_smarty_tpl->tpl_vars['level3']->value) {
$_smarty_tpl->tpl_vars['level3']->_loop = true;
$foreach_level3_Sav = $_smarty_tpl->tpl_vars['level3'];
?>
                                    <?php if (!$_smarty_tpl->tpl_vars['is_app_debug']->value && adminmenu($_smarty_tpl->tpl_vars['level3_id']->value,'is_debug')) {
continue 1;
}?>                            
                                    <?php if ((adminmenu($_smarty_tpl->tpl_vars['level3_id']->value,'power_tree_id') && !in_array(adminmenu($_smarty_tpl->tpl_vars['level3_id']->value,'power_tree_id'),$_smarty_tpl->tpl_vars['powers']->value)) && !$_smarty_tpl->tpl_vars['is_super_power']->value) {
continue 1;
}?>
                                    <dd>
                                        <a href="<?php echo url(adminmenu($_smarty_tpl->tpl_vars['level3_id']->value,'url'));?>
" data-icon="<?php echo (($tmp = @adminmenu($_smarty_tpl->tpl_vars['level3_id']->value,'icon'))===null||$tmp==='' ? adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'icon') : $tmp);?>
"><cite><?php echo adminmenu($_smarty_tpl->tpl_vars['level3_id']->value,'title');?>
</cite></a>
                                    </dd>
                                    <?php
$_smarty_tpl->tpl_vars['level3'] = $foreach_level3_Sav;
}
?>
                                </dl>
                                <?php }?>                                
                            </dd>
                            <?php
$_smarty_tpl->tpl_vars['level2'] = $foreach_level2_Sav;
}
?>
                        </dl>
                        <?php }?>
                    </li>
                    <?php
$_smarty_tpl->tpl_vars['level1'] = $foreach_level1_Sav;
}
?>
                
                <?php
$_smarty_tpl->tpl_vars['level0'] = $foreach_level0_Sav;
}
?>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="wooRight" lay-allowClose="true">
        <div class="layui-tab admin-nav-card" lay-filter="admin-tab" >
            <div class="tab-title-bg"></div>           
            <a href="javascript:void(0);" class="tab-prev"><i class="fa fa-angle-double-left fa-2x"></i></a>
            <a href="javascript:void(0);" class="tab-next"><i class="fa fa-angle-double-right fa-2x"></i></a>
			<ul class="layui-tab-title">
				<li class="layui-this">
					<i class="layui-icon layui-icon-home" aria-hidden="true"></i><cite>后台首页</cite><b class="lt"></b><b class="rt"></b>
				</li>
			</ul>
			<div class="layui-tab-content">
				<div class="layui-tab-item layui-show admin_home">
                    <div class="admin_content">
                        <div class="layui-row layui-col-space15">
                            <div class="layui-col-md8">
                                <div class="layui-row layui-col-space15">
                                    <div class="layui-col-md6">
                                        <div class="layui-card b1">
                                            <div class="layui-card-header">快捷方式<a href="<?php echo url('Shortcut/lists');?>
" class="action new_tab" data-title="快捷方式" data-icon="layui-icon-star"><i class="layui-icon layui-icon-more-vertical"></i></a></div>
                                            <div class="layui-card-body">
                                                
                                                <div class="layui-carousel admin-carousel admin-shortcut" data-height="194">
                                                    <div carousel-item>
                                                        <!--自行在快捷方式模型中进行数据管理 可以添加任意多个 自动循环-->
                                                        <ul class="grid quick-link layui-row layui-col-space10">
                                                            <?php
$_from = $_smarty_tpl->tpl_vars['shortcut_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
$_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration == $_smarty_tpl->tpl_vars['item']->total;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                                                            <li class="layui-col-xs3">
                                                                <a href="<?php echo url($_smarty_tpl->tpl_vars['item']->value['url']);?>
" class="<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 'func') {?>javascript<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 'url' && $_smarty_tpl->tpl_vars['item']->value['target'] == 'tab') {?>new_tab<?php }?>" <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 'url' && $_smarty_tpl->tpl_vars['item']->value['target'] == 'blank') {?>target="_blank"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 'url' && $_smarty_tpl->tpl_vars['item']->value['target'] == 'tab') {?>data-title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" data-icon="<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"<?php }?>  <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 'func') {?>rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['func'];?>
"<?php }?>>
                                                                    <i class="<?php if (strpos($_smarty_tpl->tpl_vars['item']->value['icon'],'layui-icon') !== false) {?>layui-icon <?php }
echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"></i>
                                                                    <span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
                                                                </a>
                                                            </li>
                                                            <?php if ($_smarty_tpl->tpl_vars['item']->iteration%8 == 0 && !$_smarty_tpl->tpl_vars['item']->last) {?>
                                                            </ul>
                                                            <ul class="grid quick-link layui-row layui-col-space10">
                                                            <?php }?>
                                                            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-md6">
                                        <div class="layui-card b2">
                                            <div class="layui-card-header">数据统计</div>
                                            <div class="layui-card-body">
                                                <div class="layui-carousel admin-carousel admin-mcount" data-height="194">
                                                     <div carousel-item>
                                                        <!--自行添加更多的数据统计 每个ul显示4个li 数据自行在run/Index/index查询assign出来-->
                                                        <ul class="grid quick-link layui-row layui-col-space10">
                                                            <li class="layui-col-xs6">
                                                                <a href="<?php echo url('Article/lists');?>
" class="new_tab" data-title="文章列表" data-icon="fa-file-text">
                                                                    <h2>文章</h2>
                                                                    <span><?php if ($_smarty_tpl->tpl_vars['count']->value['article'] < 999) {
echo $_smarty_tpl->tpl_vars['count']->value['article'];
} else { ?>999+<?php }?></span>
                                                                </a>
                                                            </li>
                                                            <li class="layui-col-xs6">
                                                                <a href="<?php echo url('Product/lists');?>
" class="new_tab" data-title="产品列表" data-icon="fa-camera">
                                                                    <h2>产品</h2>
                                                                    <span><?php if ($_smarty_tpl->tpl_vars['count']->value['product'] < 999) {
echo $_smarty_tpl->tpl_vars['count']->value['product'];
} else { ?>999+<?php }?></span>
                                                                </a>
                                                            </li>
                                                            <li class="layui-col-xs6">
                                                                <a href="<?php echo url('Album/lists');?>
" class="new_tab" data-title="图集列表" data-icon="fa-image">
                                                                    <h2>图集</h2>
                                                                    <span><?php if ($_smarty_tpl->tpl_vars['count']->value['album'] < 999) {
echo $_smarty_tpl->tpl_vars['count']->value['album'];
} else { ?>999+<?php }?></span>
                                                                </a>
                                                            </li>
                                                            <li class="layui-col-xs6">
                                                                <a href="<?php echo url('feedback/lists');?>
" class="new_tab" data-title="留言列表" data-icon="layui-icon-cellphone">
                                                                    <h2>待阅留言</h2>
                                                                    <span><?php if ($_smarty_tpl->tpl_vars['count']->value['feedback'] < 999) {
echo $_smarty_tpl->tpl_vars['count']->value['feedback'];
} else { ?>999+<?php }?></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="grid quick-link layui-row layui-col-space10">
                                                            <li class="layui-col-xs6">
                                                                <a href="<?php echo url('user/lists');?>
" class="new_tab" data-title="会员列表" data-icon="layui-icon-user">
                                                                    <h2>会员</h2>
                                                                    <span><?php if ($_smarty_tpl->tpl_vars['count']->value['user'] < 999) {
echo $_smarty_tpl->tpl_vars['count']->value['user'];
} else { ?>999+<?php }?></span>
                                                                </a>
                                                            </li>
                                                            <li class="layui-col-xs6">
                                                                <a onclick="layer.msg('敬请期待')">
                                                                    <h2>订单</h2>
                                                                    <span>0</span>
                                                                </a>
                                                            </li>
                                                            <li class="layui-col-xs6">
                                                                <a onclick="layer.msg('敬请期待')">
                                                                    <h2>消息</h2>
                                                                    <span>0</span>
                                                                </a>
                                                            </li>
                                                            <li class="layui-col-xs6">
                                                                <a onclick="layer.msg('敬请期待')">
                                                                    <h2>账单</h2>
                                                                    <span>0</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--这里显示你客户的基本信息-->
                                    <div class="layui-col-md6">
                                        <div class="layui-card b3">
                                            <div class="layui-card-header">使用企业<a href="<?php echo url('Setting/lists');?>
" class="action new_tab" data-title="系统设置" data-icon="layui-icon-set"><i class="layui-icon layui-icon-more-vertical"></i></a></div>
                                            <div class="layui-card-body">
                                                <ul class="list admin-use-info">
                                                    <li><i class="layui-icon layui-icon-flag"></i>公司：<span><?php echo setting('corp_title');?>
</span></li>
                                                    <li><i class="layui-icon layui-icon-app"></i>网站：<span><?php echo setting('site_title');?>
</span></li>
                                                    <li><i class="layui-icon layui-icon-website"></i>网址：<span class="en-font"><a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
</a></span></li>
                                                    <li><i class="layui-icon layui-icon-cellphone"></i>电话：<span class="en-font"><?php echo setting('tel');?>
</span></li>
                                                    <li><i class="layui-icon layui-icon-dialogue"></i>邮箱：<span class="en-font"><?php echo setting('email');?>
</span></li>
                                                    <li><i class="layui-icon layui-icon-location"></i> 地址：<span><?php echo setting('address');?>
</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--这里显示自己的相关信息 在应用/data/cache/Developer 自行修改-->
                                    <div class="layui-col-md6">
                                        <div class="layui-card b4">
                                            <div class="layui-card-header">开发企业</div>
                                            <div class="layui-card-body ">
                                                <ul class="list admin-use-info">                                                        
                                                    <li><i class="layui-icon layui-icon-flag"></i>公司：<span><?php echo $_smarty_tpl->tpl_vars['dev']->value['corp_title'];?>
</span></li>
                                                    <li><i class="layui-icon layui-icon-website"></i>网址：<span class="en-font"><a href="<?php echo $_smarty_tpl->tpl_vars['dev']->value['site'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['dev']->value['site'];?>
</a></span></li>
                                                    <li><i class="layui-icon layui-icon-username"></i>客服：<span class="en-font"><?php echo $_smarty_tpl->tpl_vars['dev']->value['customer'];?>
</span></li>
                                                    <li><i class="layui-icon layui-icon-cellphone"></i>电话：<span class="en-font"><?php echo $_smarty_tpl->tpl_vars['dev']->value['tel'];?>
</span></li>
                                                    <li><i class="layui-icon layui-icon-dialogue"></i>邮箱：<span class="en-font"><?php echo $_smarty_tpl->tpl_vars['dev']->value['email'];?>
</span></li>
                                                    <li><i class="layui-icon layui-icon-location"></i> 地址：<span><?php echo $_smarty_tpl->tpl_vars['dev']->value['address'];?>
</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="layui-col-md12">
                                        <div class="layui-card b5">
                                            <div class="layui-card-header">数据分析</div>
                                            <div class="layui-card-body">
                                                <div class="layui-carousel admin-carousel admin-charts-box" lay-filter="charts" data-anim="fade" data-height="330">
                                                    <div carousel-item>
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['charts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
$_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration == $_smarty_tpl->tpl_vars['item']->total;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                                                        <div class="admin-charts"></div>
                                                        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="layui-col-md4">
                                <div class="layui-card b6">
                                    <div class="layui-card-header">用户信息</div>
                                    <div class="layui-card-body">
                                        <div class="admin_user">
                                            <div class="admin_user_rght">
                                                <div class="headimg">
                                                    <i></i>
                                                    <a href="<?php echo url('Member/modify',array('parent_id'=>$_smarty_tpl->tpl_vars['login']->value['id']));?>
" data-icon="fa-user" data-title="修改信息" class="new_tab"><img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['headimg'])===null||$tmp==='' ? 'images/admin/default_headimg.png' : $tmp);?>
" alt=""/></a>
                                                </div>
                                                <div class="welcome en-font">
                                                    您好！<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['nickname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['login']->value['username'] : $tmp);?>
</span>                                        
                                                    <a href="<?php echo url('User/logout');?>
" ><i style="color: red;" class="fa fa-sign-out" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="admin_user_left">
                                                <ul class="list">
                                                    <li>真实姓名：<span class="c"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['truename'])===null||$tmp==='' ? '未设置' : $tmp);?>
</span></li>
                                                    <li>用户分组：<span class="c"><?php echo $_smarty_tpl->tpl_vars['login']->value['UserGroup']['title'];?>
</span></li>                                                 
                                                    <li>登录地址：<span class="c"><?php echo $_smarty_tpl->tpl_vars['login']->value['logined_ip'];?>
</span></li>
                                                    <li>登录时间：<span class="c"><?php echo $_smarty_tpl->tpl_vars['login']->value['logined'];?>
</span></li>
                                                </ul>
                                                <div class="user_link layui-btn-group">
                                                    <a href="<?php echo url('UserScore/lists',array('parent_id'=>$_smarty_tpl->tpl_vars['login']->value['id']));?>
" class="layui-btn layui-btn-primary new_tab" data-icon="layui-icon-senior" >我的积分</a>
                                                    <a href="<?php echo url('UserLogin/lists',array('parent_id'=>$_smarty_tpl->tpl_vars['login']->value['id']));?>
" class="layui-btn layui-btn-primary new_tab" data-icon="layui-icon-chart-screen" >登录日志</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-card b7">
                                    <div class="layui-card-header">部署信息</div>
                                    <div class="layui-card-body">
                                        <div class="layui-carousel admin-carousel admin-env" data-autoplay="1" data-interval="10000" data-anim="fade" data-height="244">
                                            <div carousel-item>
                                                <div>
                                                    <table class="layui-table ">
                                                        <colgroup>
                                                            <col width="33.33%">
                                                            <col width="33.33%">
                                                            <col width="33.33%">
                                                        </colgroup>
                                                        <tr>
                                                            <th>配额限制</th>
                                                            <th>空间使用</th>
                                                            <th>域名到期</th>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['storage_limit'];?>
</td>
                                                            <td><a href="<?php echo url('Tool/getSiteSize');?>
" class="javascript link" rel="get_site_size"><span id="showSiteSize" class="layui-badge layui-bg-orange">0KB</span></a></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['domain_expire'];?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <th>操作系统</th>
                                                            <th>服务器</th>
                                                            <th>服务器IP</th>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['php_os'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['server_software'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['server_name'];?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <th>上传限制</th>
                                                            <th>PHP</th>
                                                            <th>MYSQL</th>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['upload_max_filesize'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['php_version'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['mysql_version'];?>
</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div>
                                                    <!--第二版信息可以自行添加更多-->
                                                    <table class="layui-table ">
                                                        <colgroup>
                                                            <col width="33.33%">
                                                            <col width="33.33%">
                                                            <col width="33.33%">
                                                        </colgroup>
                                                        <tr>
                                                            <th>PDO</th>
                                                            <th>CURL</th>
                                                            <th>MBstring</th>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['pdo_extension'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['curl_extension'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['mbstring_extension'];?>
</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--可直接商用，版权信息文字和链接等内容禁止修改/删除/透明/隐藏/遮挡；具体请查看“使用协议”-->
                                <div class="layui-card woo-copyright b8">
                                    <div class="layui-card-header">软件信息<i class="layui-icon layui-icon-tips tooltip" data-tip-text="如有益求捐赠！" data-tip-type="1"></i></div>
                                    <div class="layui-card-body">
                                        <table class="layui-table">
                                            <colgroup>
                                                <col width="50%">
                                                <col width="50%">
                                            </colgroup>
                                            <tr>
                                                <th>WOOCMS</th>
                                                <th>THINKPHP</th>
                                            </tr>
                                            <tr>
                                                <td><?php echo \woo\controller\WooApp::version();?>
</td>
                                                <td><?php echo \App::version();?>
</td>
                                            </tr>
                                        </table>
                                        <div class="woo-link">
                                            <div class="layui-btn-group">
                                                <a href="https://www.eduaskcms.xin" target="_blank" class="layui-btn layui-btn-primary">系统官网</a>
                                                <a href="https://www.eduaskcms.xin/download/show/15.html" target="_blank" class="layui-btn layui-btn-primary">检查更新</a>
                                                <a href="https://www.eduaskcms.xin/addons.html" target="_blank" class="layui-btn layui-btn-primary">插件下载</a>
                                            </div>                                            
                                            <div class="layui-btn-group">
                                                <a href="https://www.kancloud.cn/laowu199/e_dev" target="_blank" class="layui-btn layui-btn-primary">开发手册</a>
                                                <a href="https://www.eduaskcms.xin/page/4.html" target="_blank" class="layui-btn layui-btn-primary">使用协议</a>
                                                <a href="//shang.qq.com/wpa/qunwpa?idkey=af4adc038e4a9d6cd04a80d2f4391d071274a004a86f4c889b9444a904f451c8" target="_blank" class="layui-btn layui-btn-primary">系统QQ群</a>
                                            </div>                                            
                                            <div class="layui-btn-group">
                                                <a href="https://www.eduaskcms.xin/dashang.html" target="_blank" class="layui-btn layui-btn-primary">赞助作者</a>
                                                <a href="https://www.eduaskcms.xin/service/2.html" target="_blank" class="layui-btn layui-btn-primary">商业授权</a>
                                                <a href="https://www.eduaskcms.xin/page/8.html" target="_blank" class="layui-btn layui-btn-primary">授权告示</a>
                                            </div>
                                        </div>
                                        <div class="Powered"><a href="https://www.eduaskcms.xin" target="_blank">© WOOCMS版权所有</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="lockScreen" <?php if ($_smarty_tpl->tpl_vars['is_lock_screen']->value) {?>style="display: block;"<?php }?>>
    <div class="init">
        <div class="relative">
            <div class="lockTime en-font"></div>
            <div class="pic"><img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['headimg'])===null||$tmp==='' ? 'images/admin/default_headimg.png' : $tmp);?>
" alt=""/><p class="en-font"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['nickname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['login']->value['username'] : $tmp);?>
</p></div>
        </div>
        <div class="wrbox">
            <input  type="password" id="screenPwd" class="wrin" value="" autocomplete="off" placeholder="请输入密码解锁.."/><br /><button id="closeLock" class="layui-btn">立即解锁</button>
        </div>
    </div>
</div>

<div class="full-shade"></div>
<div class="woo-theme">
    <div class="layui-card">
        <div class="layui-card-header">后台主题</div>
        <div class="layui-card-body">
            <ul class="grid theme-list">
                <?php
$_from = $_smarty_tpl->tpl_vars['theme']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
$_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration == $_smarty_tpl->tpl_vars['item']->total;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" data-tip-text="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" data-tip-type="<?php echo smarty_function_cycle(array('values'=>'2,4'),$_smarty_tpl);?>
">
                    <div class="theme-header"  style="background-color:<?php echo $_smarty_tpl->tpl_vars['item']->value['header_bg'];?>
 ;"></div>
                    <div class="theme-sider" style="background-color: <?php echo $_smarty_tpl->tpl_vars['item']->value['sider_bg'];?>
;">
                        <div class="theme-logo" style="background-color: <?php echo $_smarty_tpl->tpl_vars['item']->value['logo_bg'];?>
;"></div>
                    </div>
                    <div class="border"></div>
                </li>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            </ul>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
var charts_options = <?php echo json_encode($_smarty_tpl->tpl_vars['charts']->value);?>
;

layui.use(['element', 'tab', 'carousel'], function(){
    var element = layui.element;
    var carousel = layui.carousel;
    
    $('.woo-siderbar').find('a').each(function() {
        if ($(this).parent().find('dl').length) {
            $(this).attr('href', 'javascript:void(0);')
        }
    })
    
    Tab = layui.tab({ 
    	elem: '.layui-tab',
    	maxSetting: {
    		max: 20,
    		tipMsg: '最多只能开启20个'
    	},
    	contextMenu:true,
        autoRefresh:true
    });
    
    $('.admin-carousel').each(function() {
        carousel.render({
            elem: this
            ,width: '100%'
            ,height : $(this).data('height') + 'px'
            ,arrow: $(this).data('arrow') ? $(this).data('arrow') : 'none'
            ,anim : $(this).data('anim') ? $(this).data('anim') : 'default'
            ,trigger: $(this).data('trigger') ? $(this).data('trigger') : 'mouseover'
            ,autoplay: $(this).data('autoplay') ? true : false
            ,interval : $(this).data('interval') ? $(this).data('interval') : 3000
        });
    })
    
    carousel.on('change(charts)', function(obj){
        charts_change(null, 1)
    });     
    if (winWidth > 998) {
       charts_change(null, 1) 
    } else {
        charts_change()
    }
    
});


function charts_change(index, time) {
    time = time || 300;
    if (typeof(index) == 'undefined' || index === null) {
        index = $('.admin-charts-box').find('.layui-carousel-ind').find('li.layui-this').index();
    }  
    
    if (index >= 0) {
        $('.admin-charts:eq(' + index + ')').attr('_echarts_instance_', 0);
        setTimeout(function(){
            var myChart = echarts.init($('.admin-charts')[index]);
            myChart.setOption(charts_options[index]);
        }, time)
    }
}


// 测栏目
$('.woo-siderbar').on('click', 'a', function() {
    if ($('body').hasClass('close-bar-state')) {
        layer.close(layer.tips());
        $('#closeSiderbar').trigger('click');
    }
    
    if (!$(this).parent().find('dl').length) {
        var href  = $(this).attr('href');
        var title = $(this).data('title') || $(this).find('cite').text();
        if(!title)  title = $(this).text();        
        var icon  = $(this).data('icon') || $(this).closest('li').find('a:first').data('icon');
        
        if (winWidth < 1000) {
            $('#closeSiderbar').trigger('click');
            
            setTimeout(function() {
                if(typeof(Tab) != 'undefined') Tab.resize();
            }, 300)
        }
        
        Tab.tabAdd({
            title: title,
            href : href,
            icon : icon
        })
        return false;
    }
})

$('.woo-siderbar').find('li.layui-nav-item').hover(function() {
    if ($('body').hasClass('close-bar-state') && winWidth >= 1000) {
        var title = $(this).children('a').find('cite').text();
        layer.tips(title, $(this), {
            tips: [ 2, '#000'],
            time : 0
        });
    }
}, function(){
    if ($('body').hasClass('close-bar-state')) {
        layer.close(layer.tips());
    }
})


// 一级栏目切换
$('#topMenu').find('li').click(function(){
    var index = $(this).index();
    var length = $('#topMenu').find('li').length;
    if (index < length - 1) {
        $('.woo-siderbar').find('li.layui-nav-item').show().not('[data-group="' + index + '"]').hide();
    } else {
       $('.woo-siderbar').find('li.layui-nav-item').show()
    }
    $(this).closest('#topMenu').find('li.current').removeClass('current').end().find('li:eq('+index+')').addClass('current');
})


$('#closeSiderbar').click(function() {
    if ($('body').hasClass('close-bar-state')) {
        $('body').removeClass('close-bar-state').find('#closeSiderbar').find('i').removeClass('layui-icon-spread-left').addClass('layui-icon-shrink-right');
    } else {
        
        $('body').addClass('close-bar-state').find('#closeSiderbar').find('i').removeClass('layui-icon-shrink-right').addClass('layui-icon-spread-left');
    }
    charts_change()
})

//Tab
$(window).resize(function(){
    winWidth = $(window).width();
    winHight = $(window).height();
    
    if(typeof(Tab) != 'undefined') Tab.resize();
    
    if (winWidth <= 998) {
        if (!$('body').hasClass('close-bar-state')) {
            $('#closeSiderbar').trigger('click');
        }
    } else {
        if ($('body').hasClass('close-bar-state')) {
            $('#closeSiderbar').trigger('click');
        }
    }
    
    if (winWidth <= 768) {
        $('#topMenu').find('li:last').trigger('click');
    }
    
    charts_change()
}).trigger('resize')

$('.tab-prev').unbind('click').bind('click',function(){
    var left    = $('.layui-tab-title').position().left ;
    left  = left + 117 < 0 ? left + 117 : 0;
    $('.layui-tab-title').stop(true).animate({ left : left },500);
})

$('.tab-next').unbind('click').bind('click',function(){
    var left    = $('.layui-tab-title').position().left;
    var boxWid  = $('.layui-tab-title').width();
    var liWid   = 0;
    $('.layui-tab-title').children('span').remove().end().find('li').each(function(){
        liWid += $(this).outerWidth() ;
    })
    left  = left-117 > -(liWid-boxWid) ? left-117 :-(liWid-boxWid);
    if(left>0)left =  0;
    $('.layui-tab-title').stop(true).animate({ left : left },500);
})

// 刷新
function top_refresh() {
    location.reload();
}

// 主题选择
function select_theme() {
    $('.full-shade').fadeIn(200)
    $('.woo-theme').show().animate({
        right : 0
    }, 300)
}

$('.full-shade').click(function() {
    $('.full-shade').fadeOut(200)
    $('.woo-theme').show().animate({
        right : -305
    }, 300, function() {
        $(this).hide()
    })
})

$('.woo-theme .theme-list li').click(function() {
    if ($(this).hasClass('current')) return false;
    var index  = $(this).index();
    $('.woo-theme').find('li.current').removeClass('current').end().find('li:eq('+index+')').addClass('current');
    var classname = $(this).data('name');
    $('body').removeClass('black coffee purple-red ocean green yellow red-yellow-header ocean-header classic-black-header purple-red-header fashion-red-header default').addClass(classname);
    if (window.localStorage) {
        localStorage.setItem('woocms-theme', classname);
    } else {
        layer.msg('当前浏览器不支持');
    }
})

if (typeof(default_theme) != 'undefined') {
    if (default_theme)
        $('.woo-theme .theme-list li[data-name="' + default_theme +'"]').addClass('current'); 
    else
        $('.woo-theme .theme-list li[data-name="default"]').addClass('current'); 
} else {
    $('.woo-theme .theme-list li[data-name="default"]').addClass('current');
}
 

// 全屏
function full_screen() {
    if ($(this).hasClass('full')) {
        $(this).removeClass('full').find('i').removeClass('layui-icon-screen-restore').addClass('layui-icon-screen-full');
        if (document.exitFullscreen) { 
            document.exitFullscreen(); 
        } else if (document.msExitFullscreen) { 
            document.msExitFullscreen(); 
        } else if (document.mozCancelFullScreen) { 
            document.mozCancelFullScreen(); 
        } else if (document.webkitCancelFullScreen) { 
            document.webkitCancelFullScreen(); 
        } 
    } else {
        $(this).addClass('full').find('i').removeClass('layui-icon-screen-full').addClass('layui-icon-screen-restore');
        var docElm = document.documentElement; 
        if (docElm.requestFullscreen) { 
            docElm.requestFullscreen(); 
        } else if (docElm.msRequestFullscreen) { 
            docElm.msRequestFullscreen(); 
        } else if (docElm.mozRequestFullScreen) { 
            docElm.mozRequestFullScreen(); 
        } else if (docElm.webkitRequestFullScreen) { 
            docElm.webkitRequestFullScreen(); 
        } 
    }
}

function simple_clear(){
    var url = $(this).attr('href');
    HKUC.ajax_request.call(this,url,null,
    	{
    		'success':function(msg,data){
  		        layer.closeAll();
                layer.msg(msg)
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg)
    		}
    	}
    );
}

function switch_trace(){
    var url = $(this).attr('href');
    HKUC.ajax_request.call(this,url,null,
    	{
    		'success':function(msg,data){
  		        layer.closeAll();
                layer.msg(msg);
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg)
    		}
    	}
    );
}


function get_site_size(){
    var url = $(this).attr('href');
    layer.msg('查询中请稍后...',{ time:30*60*1000, shade :[0.01, '#393D49']});
    HKUC.ajax_request.call(this,url,null,
    	{
    		'success':function(msg,data){
                layer.closeAll();
                $('#showSiteSize').html(msg)
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg)
    		}
    	}
    );
}

function newTime(){
    var now  = new Date();
    var year = now.getFullYear() ;
    var month = (now.getMonth()+1) >=10 ? (now.getMonth()+1): '0' + (now.getMonth()+1);
    var date  = now.getDate() >=10 ? now.getDate(): '0' + now.getDate();
    var hour = now.getHours() >=10 ? now.getHours(): '0' + now.getHours();
    var minute = now.getMinutes() >=10 ? now.getMinutes(): '0' + now.getMinutes();
    var second = now.getSeconds() >=10 ? now.getSeconds(): '0' + now.getSeconds();
    var datetime = year + '-' + month + '-' + date + ' ' + hour + ':' + minute + ':' + second;
    //$('.showtime').html(datetime);
    $('.lockTime').html(hour + ':' + minute + ':' + second)
}
newTime()
setInterval(newTime,1000)


//同时按下alt+L锁屏
document.onkeydown = function(event){
    if (event.keyCode == 76 && event.altKey){
        lockScreen()
    }
}


//锁屏
function lockScreen(){
    if($('#lockScreen').is(':visible')) return false ; 
    $('#screenPwd').val('');   
    $('#lockScreen').fadeIn(300, function(){
        $('#closeLock').addClass('shake');
    })
    var url = "<?php echo url('Tool/lockScreen');?>
";
    HKUC.ajax_request.call(this,url,null,
    	{
    		'success':function(msg,data){
  		        layer.closeAll();
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg)
    		}
    	}
    );
}

$('#screenPwd').keyup(function(event){
    if (event.keyCode == 13) {
        $('#closeLock').trigger('click');
    }
})

$('#closeLock').click(function(){
    var url = "<?php echo url('Tool/relieveScreen');?>
";
    var pwd = $.trim($('#screenPwd').val());
    if (!pwd) {
       layer.msg('请先输入密码'); 
       return false;
    }
    HKUC.ajax_request.call(this,url,{
            pwd : pwd
        },
    	{
    		'success':function(msg,data){
    		    layer.closeAll();
  		        $('#lockScreen').fadeOut(300);
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg);
    		}
    	}
    );
})
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['deferJs']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['deferJs']->value,true);?>

<?php }?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '254075c08eb0861a832_88046818';
?>



</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:10765c08eb08694638_94436442%%*/
if ($_valid && !is_callable('content_5c08eb08694634_33112466')) {
function content_5c08eb08694634_33112466 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '10765c08eb08694638_94436442';
?>



<?php
/*/%%SmartyNocache:10765c08eb08694638_94436442%%*/
}
}
?><?php
/* smarty_template_function_url_10765c08eb08694638_94436442 */
if (!function_exists('smarty_template_function_url_10765c08eb08694638_94436442')) {
function smarty_template_function_url_10765c08eb08694638_94436442($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('url'=>'','item'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}
if (is_array($_smarty_tpl->tpl_vars['url']->value)) {
if ($_smarty_tpl->tpl_vars['url']->value[1] && $_smarty_tpl->tpl_vars['url']->value['parse'] && $_smarty_tpl->tpl_vars['item']->value) {
$_from = $_smarty_tpl->tpl_vars['url']->value['parse'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['key']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
$foreach_key_Sav = $_smarty_tpl->tpl_vars['key'];
if (!$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value]) {?>continue<?php }
$_smarty_tpl->createLocalArrayVariable('url', null, 0);
$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value]];
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
}
echo url($_smarty_tpl->tpl_vars['url']->value[0],(($tmp = @$_smarty_tpl->tpl_vars['url']->value[1])===null||$tmp==='' ? array() : $tmp),(($tmp = @$_smarty_tpl->tpl_vars['url']->value[2])===null||$tmp==='' ? true : $tmp));
} else {
echo $_smarty_tpl->tpl_vars['url']->value;
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_url_10765c08eb08694638_94436442 */

?>
<?php
/* smarty_template_function_furl_10765c08eb08694638_94436442 */
if (!function_exists('smarty_template_function_furl_10765c08eb08694638_94436442')) {
function smarty_template_function_furl_10765c08eb08694638_94436442($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('url'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}
if ($_smarty_tpl->tpl_vars['url']->value) {
if (strpos($_smarty_tpl->tpl_vars['url']->value,'http://') === false && strpos($_smarty_tpl->tpl_vars['url']->value,'https://') === false) {
if ($_smarty_tpl->tpl_vars['url']->value[0] == '/') {
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable(substr($_smarty_tpl->tpl_vars['url']->value,1), null, 0);
}
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable(($_smarty_tpl->tpl_vars['root']->value).($_smarty_tpl->tpl_vars['url']->value), null, 0);
}
echo $_smarty_tpl->tpl_vars['url']->value;
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_furl_10765c08eb08694638_94436442 */

?>
<?php
/* smarty_template_function_menu_link_10765c08eb08694638_94436442 */
if (!function_exists('smarty_template_function_menu_link_10765c08eb08694638_94436442')) {
function smarty_template_function_menu_link_10765c08eb08694638_94436442($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('id'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}
$_smarty_tpl->tpl_vars['d_d'] = new Smarty_Variable(menu($_smarty_tpl->tpl_vars['id']->value), null, 0);
if (!$_smarty_tpl->tpl_vars['d_d']->value) {?>#<?php } else {
if ($_smarty_tpl->tpl_vars['d_d']->value['type'] == 'Exlink') {
$_smarty_tpl->callTemplateFunction ('furl', $_smarty_tpl, array('url'=>$_smarty_tpl->tpl_vars['d_d']->value['ex_link']), false);
} else {
$_smarty_tpl->tpl_vars['alias'] = new Smarty_Variable(trim(menu($_smarty_tpl->tpl_vars['id']->value,'alias')), null, 0);
if (!$_smarty_tpl->tpl_vars['alias']->value) {
echo url(($_smarty_tpl->tpl_vars['d_d']->value['type']).('/show'),array('menu_id'=>$_smarty_tpl->tpl_vars['id']->value));
} else {
echo $_smarty_tpl->tpl_vars['root']->value;
echo $_smarty_tpl->tpl_vars['alias']->value;?>
.<?php echo config('url_html_suffix');
}
}
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_menu_link_10765c08eb08694638_94436442 */

?>
