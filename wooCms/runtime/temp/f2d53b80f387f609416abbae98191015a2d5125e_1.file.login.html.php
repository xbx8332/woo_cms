<?php /* Smarty version 3.1.27, created on 2018-12-06 17:24:58
         compiled from "D:\phpStudy1\WWW\wooCms\app\run\view\User\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:252285c08eaea74fe32_91367140%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2d53b80f387f609416abbae98191015a2d5125e' => 
    array (
      0 => 'D:\\phpStudy1\\WWW\\wooCms\\app\\run\\view\\User\\login.html',
      1 => 1540726586,
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
    '219ff5fb3e6d8f7b756471c708c53dd9954b2aaa' => 
    array (
      0 => '219ff5fb3e6d8f7b756471c708c53dd9954b2aaa',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '252285c08eaea74fe32_91367140',
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
  'unifunc' => 'content_5c08eaea843a31_00437206',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy1\\WWW\\wooCms\\runtime\\temp\\f2d53b80f387f609416abbae98191015a2d5125e_1.file.login.html.php',
      'uid' => 'bbc28adafa389cf1176576f4c90b9c75060a78cf',
      'call_name' => 'smarty_template_function_url_237785c08eaea7c9c37_58483778',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy1\\WWW\\wooCms\\runtime\\temp\\f2d53b80f387f609416abbae98191015a2d5125e_1.file.login.html.php',
      'uid' => 'bbc28adafa389cf1176576f4c90b9c75060a78cf',
      'call_name' => 'smarty_template_function_furl_237785c08eaea7c9c37_58483778',
    ),
    'menu_link' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy1\\WWW\\wooCms\\runtime\\temp\\f2d53b80f387f609416abbae98191015a2d5125e_1.file.login.html.php',
      'uid' => 'bbc28adafa389cf1176576f4c90b9c75060a78cf',
      'call_name' => 'smarty_template_function_menu_link_237785c08eaea7c9c37_58483778',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c08eaea843a31_00437206')) {
function content_5c08eaea843a31_00437206 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '252285c08eaea74fe32_91367140';
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
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '237785c08eaea7c9c37_58483778', 'content_5c08eaea7c9c30_96416653');
/*  End of included template "functions.html" */?>


</head>

<body>
<?php
$_smarty_tpl->properties['nocache_hash'] = '252285c08eaea74fe32_91367140';
?>

<!--[if lt IE 10]> 
<p style="text-align: center;padding-top:100px;">请使用高版本浏览器进入后台管理（建议浏览器：Firefox、Chrome）</p>
<p><a href="http://www.firefox.com.cn/">下载Firefox浏览器</a></p>
<p><a href="http://www.google.cn/chrome/browser//">下载Chrome浏览器</a></p>
<div style="display:none">
<![endif]--> 

<div id="login">
    <h1>
		 <strong><span class="en-font">WOOCMS</span>管理系统后台</strong>
		 <em class="en-font">Management System</em>
	</h1>
    
    <div class="user info">
        <label>U</label>
        <?php echo $_smarty_tpl->tpl_vars['form']->value->text("User.username",array('class'=>'en-font','placeholder'=>'账号','autocomplete'=>'off'));?>

    </div>
    <div class="pwd info">
        <label>P</label>
        <?php echo $_smarty_tpl->tpl_vars['form']->value->password("User.password",array('class'=>'en-font','placeholder'=>'密码','autocomplete'=>'off'));?>

    </div>
    <div class="code info">
        <label>V</label>
        <?php echo $_smarty_tpl->tpl_vars['form']->value->text("captcha",array('class'=>'en-font','name'=>'captcha','value'=>'','autocomplete'=>'off','placeholder'=>'验证码'));?>

        <span class="vimg"><img  src="<?php echo captcha_src();?>
" id="captchaimg" class="tooltip" onclick="this.src='<?php echo captcha_src();?>
?'+Math.random()"/></span>
    </div>
    <div class="sub">
        <input  type="submit" id="loginSubmit" value="立即登录"/>
    </div>
    <div class="copy"><a href="<?php echo $_smarty_tpl->tpl_vars['dev']->value['site'];?>
" target="_blank">© WOOCMS版权所有　精心铸造应用管理系统</a></div>
</div>
<div class="auth">
    <div class="loading"><div class="loader-inner ball-clip-rotate-multiple"></div></div>
    <p>验证中...</p>
</div>



<?php echo '<script'; ?>
 type="text/javascript">
layui.use(['layer', 'carousel'],function(){
    'use strict';
    var layer=layui.layer;
    
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    layer.msg('<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
');
    <?php }?>
    
});

$('body').keydown(function(e){
    if (e.keyCode == 13) {
        $('#loginSubmit').trigger('click') ;
    }
})


$('#loginSubmit').click(function(){
    layer.closeAll();
    var username = $.trim($('#UserUsername').val());
    if (!username) {
        layer.alert('请填写用户名', {
            shade : 0,
            anim : 2,
            offset : '10px',
            time : 3000,
            icon : 2
        });
        return false;
    }
    var password = $.trim($('#UserPassword').val());
    if (!password) {
        layer.alert('请填写密码', {
            shade : 0,
            anim : 2,
            offset : '10px',
            time : 3000,
            icon : 2
        });
        return false;
    }
    var captcha = $.trim($('input[name="captcha"]').val());
    if (!captcha) {
        layer.alert('请填写验证码', {
            shade : 0,
            anim : 2,
            offset : '10px',
            time : 3000,
            icon : 2
        });
        return false;
    }
    
    $('#login').addClass('checking');
    setTimeout(function(){
        $('#login').animate({
            'margin-left' : -450
        }, 200, 'easeOutQuint')
        $('.auth').addClass('checking');
    }, 500)
    
    setTimeout(function(){
        $.post("<?php echo url('User/ajax_login');?>
",{
            username : username,
            password : password,
            captcha : captcha
        }, function(data){
            var json = $.parseJSON(data);
            if (json['result'] == 'success') {
                layer.alert(json['message'], {
                    shade : 0,
                    anim : 2,
                    offset : '10px',
                    time : 3000,
                    title:'成功',
                    icon: 6
                });
                setTimeout(function(){
                    location.href = json['data']['url'];
                }, 800)
                
                
            } else {
                $('#login').animate({
                    'margin-left' : -180
                }, 200, 'easeOutQuint')
                $('.auth').removeClass('checking');
                setTimeout(function(){
                    $('#login').removeClass('checking');                    
                }, 250)
                setTimeout(function(){
                    $('#captchaimg').trigger('click');
                    layer.alert(json['message'], {
                        shade : 0,
                        anim : 2,
                        offset : '10px',
                        time : 3000,
                        title:'失败',
                        icon: 5
                    });
                }, 550)
            }
        })
    }, 1500)
    
})


<?php echo '</script'; ?>
>
<!--[if lt IE 10]>
	</div>
<![endif]--> 

<?php if ($_smarty_tpl->tpl_vars['deferJs']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['deferJs']->value,true);?>

<?php }?>

</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:237785c08eaea7c9c37_58483778%%*/
if ($_valid && !is_callable('content_5c08eaea7c9c30_96416653')) {
function content_5c08eaea7c9c30_96416653 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '237785c08eaea7c9c37_58483778';
?>



<?php
/*/%%SmartyNocache:237785c08eaea7c9c37_58483778%%*/
}
}
?><?php
/* smarty_template_function_url_237785c08eaea7c9c37_58483778 */
if (!function_exists('smarty_template_function_url_237785c08eaea7c9c37_58483778')) {
function smarty_template_function_url_237785c08eaea7c9c37_58483778($_smarty_tpl,$params) {
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
/*/ smarty_template_function_url_237785c08eaea7c9c37_58483778 */

?>
<?php
/* smarty_template_function_furl_237785c08eaea7c9c37_58483778 */
if (!function_exists('smarty_template_function_furl_237785c08eaea7c9c37_58483778')) {
function smarty_template_function_furl_237785c08eaea7c9c37_58483778($_smarty_tpl,$params) {
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
/*/ smarty_template_function_furl_237785c08eaea7c9c37_58483778 */

?>
<?php
/* smarty_template_function_menu_link_237785c08eaea7c9c37_58483778 */
if (!function_exists('smarty_template_function_menu_link_237785c08eaea7c9c37_58483778')) {
function smarty_template_function_menu_link_237785c08eaea7c9c37_58483778($_smarty_tpl,$params) {
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
/*/ smarty_template_function_menu_link_237785c08eaea7c9c37_58483778 */

?>
