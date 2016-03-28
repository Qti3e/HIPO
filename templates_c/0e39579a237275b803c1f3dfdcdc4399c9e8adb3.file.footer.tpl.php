<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-12 23:23:52
         compiled from "style/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1939088678566c9e78b040d9-58034397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e39579a237275b803c1f3dfdcdc4399c9e8adb3' => 
    array (
      0 => 'style/footer.tpl',
      1 => 1449971131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1939088678566c9e78b040d9-58034397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footer_js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566c9e78b17ee2_32704453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566c9e78b17ee2_32704453')) {function content_566c9e78b17ee2_32704453($_smarty_tpl) {?>    <span id="legal">Copyright (c) 2014-<?php echo date("y");?>
 <a href="http://hipo.ir" target="_blank">HIPO!</a> All Rights Reserved.</span>
     <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>

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
 src="assets/jquery-knob/js/jquery.knob.js"><?php echo '</script'; ?>
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

<?php echo '</script'; ?>
>


</body>
</html><?php }} ?>
