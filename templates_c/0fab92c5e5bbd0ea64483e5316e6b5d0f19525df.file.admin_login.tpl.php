<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-24 23:00:40
         compiled from "style/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134153002556a548f6061f14-59909223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fab92c5e5bbd0ea64483e5316e6b5d0f19525df' => 
    array (
      0 => 'style/admin_login.tpl',
      1 => 1453672837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134153002556a548f6061f14-59909223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a548f60aa480_89373833',
  'variables' => 
  array (
    'base' => 0,
    'title' => 0,
    'dec' => 0,
    'main_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a548f60aa480_89373833')) {function content_56a548f60aa480_89373833($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="AliReza Ghadimi">
    <base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
    <link rel="shortcut icon" href="../img/ico.png">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['dec']->value!='') {?>|<?php echo $_smarty_tpl->tpl_vars['dec']->value;
}?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <div class="form-signin">
        <h2 class="form-signin-heading">ورود مدیر</h2>
        <div class="login-wrap">
            <input id="username" type="text" class="form-control" style="text-align: center;" placeholder="نام کاربری"
                   autofocus>
            <input id="password" type="password" class="form-control" style="text-align: center;" placeholder="رمز عبور">
            <button class="btn btn-lg btn-login btn-block" id="submit">ورود</button>
            <div id="cm-error"></div>
        </div>

    </div>

</div>
<!-- js placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.nicescroll.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.sparkline.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/owl.carousel.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.customSelect.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/md5.js" ><?php echo '</script'; ?>
>

<!--common script for all pages-->
<?php echo '<script'; ?>
 src="js/common-scripts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

    $(document).ready(function() {
        var p = 0;
        $("#submit").bind('click',function(){
            $.post(
                    "<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
admin_login",
                    {
                        username: $("#username").val(),
                        password: hex_md5($("#password").val())
                    },
                    function(s){
                        if(s.code == "nok"){
                            $("#cm-error").html(
                                    "<div dir='rtl' class=\"alert alert-danger  fade in\">"+
                                    "<strong>نام کاربری یا رمز عبور اشتباه است</strong>"+
                                    "<button style='float: left;' data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">"+
                                    "<i class=\"icon-remove\"></i>"+
                                    "</button>"+
                                    "</div>"
                            );
                        }else{
                            window.location.reload();
                        }
                    },"json"
            );
        });
    });
<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
