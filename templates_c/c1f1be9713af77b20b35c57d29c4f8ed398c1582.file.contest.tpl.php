<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-12 23:39:14
         compiled from "style/contest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:882875129566ca212e57164-85098645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1f1be9713af77b20b35c57d29c4f8ed398c1582' => 
    array (
      0 => 'style/contest.tpl',
      1 => 1450069560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '882875129566ca212e57164-85098645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'questions' => 0,
    'question' => 0,
    'problems' => 0,
    'id' => 0,
    'main_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566ca213021426_87833785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ca213021426_87833785')) {function content_566ca213021426_87833785($_smarty_tpl) {?><div class="row">
    <div class="col-lg-4">
        <section class="panel">
            <header class="panel-heading">
                درصد پاسخگویی(نسبت به همه کاربران)
            </header>
            <div class="panel-body">
                <div id="hero-donut" class="graph"></div>
            </div>
        </section>
    </div>
    <div class="col-lg-8">
        <!--work progress start-->
        <section class="panel">
            <div class="panel-body progress-panel">
                <div class="task-progress" style="float: right">
                    <h1>سوالات</h1>
                </div>
            </div>
            <table class="table table-hover personal-task">
                <tbody>
                <tr>
                    <td>*</td>
                    <td>
                        عنوان
                    </td>
                    <td>
                        سطح سوال
                    </td>
                    <td>
                        ارسال ها
                    </td>
                    <td>
ارسال های صحیح
                    </td>
                    <td>
                        ارسال های شما
                    </td>
                    <td>
                        ارسال های غلط شما
                    </td>

                </tr>
                <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['question']->key;
?>
                    <tr class="<?php if ($_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['c_user_count_true']==1) {?>true<?php } elseif ($_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['c_user_count_false']>=1) {?>false<?php }?>">
                        <td><?php echo $_smarty_tpl->tpl_vars['id']->value+1;?>
</td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
question/<?php echo $_smarty_tpl->tpl_vars['question']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['title'];?>
</a>
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['level']>3) {?>خیلی سخت<?php } else {
if ($_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['level']>2) {?>سخت<?php } else {
if ($_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['level']>1) {?>متوسط<?php } else {
if ($_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['level']>0) {?>آسان<?php } else { ?>خیلی آسان<?php }
}
}
}?>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['count_true']+$_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['count_false'];?>

                        </td>
                        <td>
                            <span class="badge bg-success"><?php echo $_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['count_true'];?>
</span>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['c_user_count_true']+$_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['c_user_count_false'];?>

                        </td>
                        <td>
                            <span class="badge bg-important"><?php echo $_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['question']->value]['c_user_count_false'];?>
</span>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </section>
        <!--work progress end-->
    </div>
</div><?php }} ?>
