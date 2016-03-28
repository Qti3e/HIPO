<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-24 22:56:41
         compiled from "style/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7520884056a5484ed0a019-72294757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0ed17ecd17e158f639b2d38d69827689a2885a6' => 
    array (
      0 => 'style/register.tpl',
      1 => 1453672600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7520884056a5484ed0a019-72294757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a5484ed6d057_36180804',
  'variables' => 
  array (
    'base' => 0,
    'title' => 0,
    'dec' => 0,
    'main_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a5484ed6d057_36180804')) {function content_56a5484ed6d057_36180804($_smarty_tpl) {?><!DOCTYPE html>
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

    <div class="form-signup">
        <h2 class="form-signup-heading">فرم عضویت</h2>
        <form id="signupForm" class="login-wrap">
            <section class=" wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <span style="float: right;">اطلاعات حساب</span>
                        <hr>
                        <input name="email" id="email" type="text" class="form-control" style="text-align: center;" placeholder="پست الکترونیکی" >
                        <input name="username" id="username" type="text" class="form-control" style="text-align: center;" placeholder="نام کاربری" >
                        <input name="password" id="password" type="password" class="form-control" style="text-align: center;" placeholder="رمز عبور"><br>
                        <input name="confirm_password" id="confirm_password" type="password" class="form-control" style="text-align: center;" placeholder="تایید رمز عبور">
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <span style="float: right;">اطلاعات شخصی</span>
                        <hr>
                        <input name="firstname" id="firstname" type="text" class="form-control" style="text-align: center;" placeholder="نام" autofocus>
                        <input name="lastname" id="lastname" type="text" class="form-control" style="text-align: center;" placeholder="نام خانوادگی">
                        <input name="age" id="age" type="text" class="form-control" style="text-align: center;" placeholder="سن">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-sm-6">
                        <input  type="checkbox" style="width: 20px" class="checkbox form-control" name="agree" id="agree" />
                    </div>
                    <label for="agree" class="control-label col-lg-6 col-sm-6" style="text-align: right">قوانین عضویت را می پذیرم</label>
                </div>
            </section>
            <button class="btn btn-lg btn-login btn-block" id="submit">عضویت</button>
            <hr>
            <a style="color: #ffffff" href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
login" class="btn btn-lg btn-info btn-block">وورد</a>
            <div id="cm-error"></div>
        </form>

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
 type="text/javascript" src="js/jquery.validate.min.js"><?php echo '</script'; ?>
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
    var submitHandler = function() {
        $.post(
                "<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
register",
                {
                    firstname:$("#firstname").val(),
                    lastname:$("#lastname").val(),
                    age:$("#age").val(),
                    email:$("#email").val(),
                    username: $("#username").val(),
                    password: hex_md5($("#password").val())
                },
                function(s){
                    if(s.code == 400){
                        $("#cm-error").html(
                                "<div dir='rtl' class=\"alert alert-danger  fade in\">"+
                                "<strong>نام کاربری از قبل موجود است</strong>"+
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
    };
<?php echo '</script'; ?>
>

<!--script for this page-->
<?php echo '<script'; ?>
 src="js/register-form-validation-script.js"><?php echo '</script'; ?>
>



</body>
</html><?php }} ?>
