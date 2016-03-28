<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-12 23:41:36
         compiled from "style/notfound404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1124090203566ca2a0f35272-57702567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '609651679bb09a42f26fbc6de8e9dfd3f91d174a' => 
    array (
      0 => 'style/notfound404.tpl',
      1 => 1450608659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1124090203566ca2a0f35272-57702567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base' => 0,
    'title' => 0,
    'main_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566ca2a102a3d0_22616784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ca2a102a3d0_22616784')) {function content_566ca2a102a3d0_22616784($_smarty_tpl) {?><!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="AliReza Ghadimi">
    <base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
    <link rel="shortcut icon" href="../img/ico.png">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | صفحه پیدا نشد</title>

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

<body class="body-404">

<div class="container">

    <section class="error-wrapper">
        <i class="icon-404"></i>
        <h1>404</h1>
        <h2>یافت نشد!</h2>
        <p class="page-404">صفحه درخواستی یافت نشد. لطفا یکی از صفحات یشنهادی را انتخاب نمایید<a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
">صفحه اصلی</a></p>
    </section>

</div>


</body>
</html><?php }} ?>
