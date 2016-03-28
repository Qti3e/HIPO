<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-12 23:23:52
         compiled from "style/ranking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1209448726566c9e78a854b3-03371430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a496164d80892e3c0e7f9ee7bf82df8070e1e91' => 
    array (
      0 => 'style/ranking.tpl',
      1 => 1449957330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1209448726566c9e78a854b3-03371430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dec' => 0,
    'q' => 0,
    'id' => 0,
    'problems' => 0,
    'ranks' => 0,
    'user_id' => 0,
    'users' => 0,
    'c_user' => 0,
    'main_url' => 0,
    'Q_id' => 0,
    'questions' => 0,
    'scores' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566c9e78afee41_70171701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566c9e78afee41_70171701')) {function content_566c9e78afee41_70171701($_smarty_tpl) {?><div class="row">
    <div class="col-lg-12">
        <!--work progress start-->
        <section class="panel">
            <div class="panel-body progress-panel">
                <div class="task-progress" style="float: right">
                    <h1><?php echo $_smarty_tpl->tpl_vars['dec']->value;?>
</h1>
                </div>
            </div>
            <table class="table table-hover personal-task">
                <tbody>
                <tr>
                    <td>رتبه</td>
                    <td>
نام کاربر
                    </td>
                    <?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['q']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
?>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['id']->value]['title'];?>

                        </td>
                    <?php } ?>
                    <td>
مجموع امتیاز
                    </td>
                    <td>
                        رتبه کلی
                    </td>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['rank'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rank']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ranks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rank']->key => $_smarty_tpl->tpl_vars['rank']->value) {
$_smarty_tpl->tpl_vars['rank']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['rank']->key;
?>
                    <?php  $_smarty_tpl->tpl_vars['user_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ranks']->value[$_smarty_tpl->tpl_vars['id']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user_id']->key => $_smarty_tpl->tpl_vars['user_id']->value) {
$_smarty_tpl->tpl_vars['user_id']->_loop = true;
?>
                        <tr <?php if ($_smarty_tpl->tpl_vars['users']->value['users'][$_smarty_tpl->tpl_vars['user_id']->value]['id']==$_smarty_tpl->tpl_vars['c_user']->value['id']) {?> class="active"<?php }?>>
                            <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
profile/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['users']->value['users'][$_smarty_tpl->tpl_vars['user_id']->value]['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['users']->value['users'][$_smarty_tpl->tpl_vars['user_id']->value]['lname'];?>

                                </a>
                            </td>
                            <?php  $_smarty_tpl->tpl_vars['Q_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Q_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['q']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Q_id']->key => $_smarty_tpl->tpl_vars['Q_id']->value) {
$_smarty_tpl->tpl_vars['Q_id']->_loop = true;
?>
                                <?php if (isset($_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['user_id']->value][$_smarty_tpl->tpl_vars['Q_id']->value])) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['user_id']->value][$_smarty_tpl->tpl_vars['Q_id']->value]['_true'])) {?>
                                        <td style="color: #a9d86e;font-size: 17px;direction: ltr">
                                            <?php if (isset($_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['user_id']->value][$_smarty_tpl->tpl_vars['Q_id']->value]['_false'])) {?>
                                                <?php echo 100+(-10*$_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['user_id']->value][$_smarty_tpl->tpl_vars['Q_id']->value]['_false']);?>
<br>
                                                <small style="color: #4a4a4a;font-size: 10px;">-<?php echo $_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['user_id']->value][$_smarty_tpl->tpl_vars['Q_id']->value]['_false'];?>
</small>
                                            <?php } else { ?>
                                                +100
                                            <?php }?>
                                        </td>
                                    <?php } else { ?>
                                        <td style="color: #ff6c60;font-size: 17px;direction: ltr">
                                            <b><?php echo $_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['user_id']->value][$_smarty_tpl->tpl_vars['Q_id']->value]['_false']*-10;?>
</b>
                                        </td>
                                    <?php }?>
                                <?php } else { ?>
                                    <td>
                                       --
                                    </td>
                                <?php }?>
                            <?php } ?>
                            <td style="direction: ltr">
                                <?php echo $_smarty_tpl->tpl_vars['scores']->value[$_smarty_tpl->tpl_vars['id']->value];?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['users']->value['users'][$_smarty_tpl->tpl_vars['user_id']->value]['rank'];?>

                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                </tbody>
            </table>
        </section>
        <!--work progress end-->
    </div>
</div><?php }} ?>
