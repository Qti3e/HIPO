<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-24 20:45:43
         compiled from "style/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:670092083566ca2042cb5e2-24979167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5ac7e424a9efbea1a53d4fb1a18e39fb85c6855' => 
    array (
      0 => 'style/header.tpl',
      1 => 1453664732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '670092083566ca2042cb5e2-24979167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566ca2043c7780_41138325',
  'variables' => 
  array (
    'base' => 0,
    'title' => 0,
    'dec' => 0,
    'debug' => 0,
    'main_url' => 0,
    'c_user' => 0,
    'sideMenu' => 0,
    'page' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ca2043c7780_41138325')) {function content_566ca2043c7780_41138325($_smarty_tpl) {?><!DOCTYPE html>
<html dir="rtl" lang="en">
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
    <link href="assets/morris.js-0.4.3/morris.css" rel="stylesheet" />
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
    <?php if ($_smarty_tpl->tpl_vars['debug']->value==true) {?>
        <?php echo '<script'; ?>
 type="application/javascript">
            window.setInterval(function(){
                window.location.reload();
            },1500);
        <?php echo '</script'; ?>
>
    <?php }?>
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <!--logo start-->
        <a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
" class="logo" ><span style="margin-left: 20px;"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span></a>
        <!--logo end-->
        <div class="top-nav ">
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="img/avatar1_small.jpg"><!--TODO $c_user.avatar|s29-->
                        <span class="username"><?php echo $_smarty_tpl->tpl_vars['c_user']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['c_user']->value['lname'];?>
</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
profile/<?php echo $_smarty_tpl->tpl_vars['c_user']->value['id'];?>
"><i class=" icon-suitcase"></i>پروفایل</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
edit_profile"><i class="icon-cog"></i>تنظیمات</a></li>
                        <li><a href="#"><i class="icon-bell-alt"></i>اطلاعیه ها</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
logout"><i class="icon-key"></i>خروج</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sideMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
                    <li<?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['m']->value[2]) {?> class="active"<?php }?>>
                        <a class="" href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;
echo $_smarty_tpl->tpl_vars['m']->value[2];?>
">
                            <i class="<?php echo $_smarty_tpl->tpl_vars['m']->value[1];?>
"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['m']->value[0];?>
</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start--><?php }} ?>
