<?php /* Smarty version 3.1.27, created on 2018-12-06 16:52:05
         compiled from "D:\phpStudy1\WWW\wooCms\app\run\view\Addon\lists.html" */ ?>
<?php
/*%%SmartyHeaderCode:80875c08e335606f87_32423962%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b58148b81eae16e8121bae531e9496afac17511' => 
    array (
      0 => 'D:\\phpStudy1\\WWW\\wooCms\\app\\run\\view\\Addon\\lists.html',
      1 => 1538538038,
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
    '58183b3845c1c61af8a0b08fd6a2ea69e58d611c' => 
    array (
      0 => '58183b3845c1c61af8a0b08fd6a2ea69e58d611c',
      1 => 0,
      2 => 'string',
    ),
    '12fa473c061c3d9031d48d3505bd56ed5dde28a4' => 
    array (
      0 => '12fa473c061c3d9031d48d3505bd56ed5dde28a4',
      1 => 0,
      2 => 'string',
    ),
    '07450cb5c6cdfb107231e27f45df015fb6c054eb' => 
    array (
      0 => '07450cb5c6cdfb107231e27f45df015fb6c054eb',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '80875c08e335606f87_32423962',
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
  'unifunc' => 'content_5c08e33572fd87_72668954',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy1\\WWW\\wooCms\\runtime\\temp\\0b58148b81eae16e8121bae531e9496afac17511_1.file.lists.html.php',
      'uid' => 'bbc28adafa389cf1176576f4c90b9c75060a78cf',
      'call_name' => 'smarty_template_function_url_2475c08e335683f82_65350766',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy1\\WWW\\wooCms\\runtime\\temp\\0b58148b81eae16e8121bae531e9496afac17511_1.file.lists.html.php',
      'uid' => 'bbc28adafa389cf1176576f4c90b9c75060a78cf',
      'call_name' => 'smarty_template_function_furl_2475c08e335683f82_65350766',
    ),
    'menu_link' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy1\\WWW\\wooCms\\runtime\\temp\\0b58148b81eae16e8121bae531e9496afac17511_1.file.lists.html.php',
      'uid' => 'bbc28adafa389cf1176576f4c90b9c75060a78cf',
      'call_name' => 'smarty_template_function_menu_link_2475c08e335683f82_65350766',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c08e33572fd87_72668954')) {
function content_5c08e33572fd87_72668954 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '80875c08e335606f87_32423962';
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
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2475c08e335683f82_65350766', 'content_5c08e335683f83_25082256');
/*  End of included template "functions.html" */?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '80875c08e335606f87_32423962';
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
$_smarty_tpl->properties['nocache_hash'] = '80875c08e335606f87_32423962';
?>

<div class="admin_main">
    <div class="admin_header_fixed load-frame-hidden">
        <div class="admin_header clearfix">
            <div class="title"><i></i><?php echo $_smarty_tpl->tpl_vars['title']->value['operation'];
if ($_smarty_tpl->tpl_vars['parent_info']->value) {?><a class="parent_info" href="<?php echo url((($_smarty_tpl->tpl_vars['params']->value['controller']).('/')).('lists'),array_merge($_smarty_tpl->tpl_vars['args']->value,array('parent_id'=>null)));?>
">所属<?php echo $_smarty_tpl->tpl_vars['parent_info']->value['cname'];?>
：<?php echo $_smarty_tpl->tpl_vars['parent_info']->value['title'];?>
</a><?php }?></div>
            <?php if ($_smarty_tpl->tpl_vars['actions']->value) {?>
    		<div class="action">
                <b></b>
                <div class="layui-btn-group">
    			<?php
$_from = $_smarty_tpl->tpl_vars['actions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
if (!$_smarty_tpl->tpl_vars['item']->value) {
continue 1;
}?><a class="layui-btn  layui-btn-sm  layui-btn-shadow <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
 <?php if (strpos($_smarty_tpl->tpl_vars['item']->value['class'],'layui-btn') === false) {?>layui-btn-primary<?php }?>" href="<?php $_smarty_tpl->callTemplateFunction ('url', $_smarty_tpl, array('url'=>$_smarty_tpl->tpl_vars['item']->value['url']), true);?>
"><i class="fa <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </div>
            </div>
    		<?php }?>
        </div>
    </div>
    <div class="admin_base">
    
<div id="addonList">
    <blockquote class="layui-elem-quote">获取更多插件<a href="https://www.eduaskcms.xin/addons.html" target="_blank">https://www.eduaskcms.xin/addons.html</a></blockquote>
    <ul class="grid">
        <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <li>
            <div class="info">
                <div class="item_name en-font">
                    <span>V1.0.0</span>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                </div>
                <div class="item_tit">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                </div>
                <div class="item_summary"><?php echo $_smarty_tpl->tpl_vars['item']->value['intro'];?>
 作者:<?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</div>
                <div class="item_action">
                    <div <?php if (addon_exists($_smarty_tpl->tpl_vars['item']->value['name'])) {?>class="layui-btn-group"<?php }?>>
                        <?php if (!addon_exists($_smarty_tpl->tpl_vars['item']->value['name'])) {?>
                        <a href="<?php echo url('Addon/install',array('name'=>$_smarty_tpl->tpl_vars['item']->value['name']));?>
" rel="addon_install" class="layui-btn layui-btn-sm javascript">安装</a>
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
查看" data-icon="fa fa-eye" class="layui-btn layui-btn-sm new_tab">查看</a>
                        <?php $_smarty_tpl->tpl_vars['config'] = new Smarty_Variable(get_addon_config($_smarty_tpl->tpl_vars['item']->value['name']), null, 0);?>
                        <?php if (isset($_smarty_tpl->tpl_vars['config']->value['addon_config'])) {?>
                        <a href="<?php echo url('AddonConfig/lists',array('name'=>$_smarty_tpl->tpl_vars['item']->value['name']));?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
配置" data-icon="fa fa-gear" class="layui-btn layui-btn-warm layui-btn-sm new_tab">配置</a>
                        <?php }?>
                        <a href="<?php echo url('Addon/uninstall',array('name'=>$_smarty_tpl->tpl_vars['item']->value['name']));?>
" rel="addon_uninstall" class="layui-btn layui-btn-sm layui-btn-danger javascript">卸载</a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </li>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    </ul>
</div>

    </div>
    <div class="admin_bottom">
    
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['deferJs']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['deferJs']->value,true);?>

<?php }?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '80875c08e335606f87_32423962';
?>


<?php echo '<script'; ?>
>
function addon_uninstall() {
    var url  = $(this).attr('href');
    layer.confirm('请确认是否卸载插件？',{
        title : '卸载提示',
        icon : 5
    }, function(){
        var index =  layer.load();
        HKUC.ajax_request(url,null,
        	{
        		'success':function(msg,data){
      		        layer.close(index);
                    layer.msg(msg,{
                        time:1000,
                        end:function(){
                            window.location.reload();
                        }
                    });
        		},
        		'error':function(msg,data){
                      layer.close(index);
                      layer.msg(msg)
        		}
        	}
        );
    }) 
}


function addon_install() {
    var url  = $(this).attr('href');
    var index =  layer.load();
    
    HKUC.ajax_request(url,null,
    	{
    		'success':function(msg,data){
  		        layer.close(index);
                layer.msg(msg,{
                    time:1000,
                    end:function(){
                        window.location.reload();
                    }
                });
    		},
    		'error':function(msg,data){
                  layer.close(index);
                  layer.msg(msg)
    		}
    	}
    );
}




<?php echo '</script'; ?>
>


</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:2475c08e335683f82_65350766%%*/
if ($_valid && !is_callable('content_5c08e335683f83_25082256')) {
function content_5c08e335683f83_25082256 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2475c08e335683f82_65350766';
?>



<?php
/*/%%SmartyNocache:2475c08e335683f82_65350766%%*/
}
}
?><?php
/* smarty_template_function_url_2475c08e335683f82_65350766 */
if (!function_exists('smarty_template_function_url_2475c08e335683f82_65350766')) {
function smarty_template_function_url_2475c08e335683f82_65350766($_smarty_tpl,$params) {
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
/*/ smarty_template_function_url_2475c08e335683f82_65350766 */

?>
<?php
/* smarty_template_function_furl_2475c08e335683f82_65350766 */
if (!function_exists('smarty_template_function_furl_2475c08e335683f82_65350766')) {
function smarty_template_function_furl_2475c08e335683f82_65350766($_smarty_tpl,$params) {
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
/*/ smarty_template_function_furl_2475c08e335683f82_65350766 */

?>
<?php
/* smarty_template_function_menu_link_2475c08e335683f82_65350766 */
if (!function_exists('smarty_template_function_menu_link_2475c08e335683f82_65350766')) {
function smarty_template_function_menu_link_2475c08e335683f82_65350766($_smarty_tpl,$params) {
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
/*/ smarty_template_function_menu_link_2475c08e335683f82_65350766 */

?>
