<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-24 20:55:37
         compiled from "style/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2040177634566ca204552390-62136944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8326be423dd34d39be57cce9cc95900cfaf55a54' => 
    array (
      0 => 'style/footer.tpl',
      1 => 1453665335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2040177634566ca204552390-62136944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566ca2045596d2_05313249',
  'variables' => 
  array (
    'footer_js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ca2045596d2_05313249')) {function content_566ca2045596d2_05313249($_smarty_tpl) {?>    <span id="legal">Copyright (c) 2014-<?php echo date("y");?>
 <a href="http://hipo.ir" target="_blank">HIPO!</a> All Rights Reserved.</span>
     <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>
<div id="loading"></div>
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
 src="assets/morris.js-0.4.3/morris.min.js" type="text/javascript"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="assets/morris.js-0.4.3/raphael-min.js" type="text/javascript"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="assets/chart-master/Chart.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="js/jquery.sparkline.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/jquery-knob/js/jquery.knob.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/md5.js" ><?php echo '</script'; ?>
>

     <!--common script for all pages-->
<?php echo '<script'; ?>
 src="js/common-scripts.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="application/javascript">
    <?php echo $_smarty_tpl->tpl_vars['footer_js']->value;?>

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/all-chartjs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/sparkline-chart.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    //knob
    $(".knob").knob();
    $(window).on("load", function () {
        setTimeout(function () {
            $("#loading").hide();
        }, 300);
    });
<?php echo '</script'; ?>
>


</body>
</html><?php }} ?>
