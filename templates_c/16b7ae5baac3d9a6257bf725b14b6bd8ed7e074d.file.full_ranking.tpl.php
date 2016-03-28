<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-24 18:04:35
         compiled from "style/full_ranking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1370651387566ca20c5bf125-09990665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16b7ae5baac3d9a6257bf725b14b6bd8ed7e074d' => 
    array (
      0 => 'style/full_ranking.tpl',
      1 => 1453655072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1370651387566ca20c5bf125-09990665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566ca20c6b0c66_49505547',
  'variables' => 
  array (
    'dec' => 0,
    'ranks' => 0,
    'user_id' => 0,
    'users' => 0,
    'c_user' => 0,
    'main_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ca20c6b0c66_49505547')) {function content_566ca20c6b0c66_49505547($_smarty_tpl) {?><div class="row">
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
                    <td>
                        مجموع امتیاز
                    </td>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['user_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ranks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['user_id']->value = $_smarty_tpl->tpl_vars['user']->key;
?>
                    <tr <?php if ($_smarty_tpl->tpl_vars['users']->value['users'][$_smarty_tpl->tpl_vars['user_id']->value]['id']==$_smarty_tpl->tpl_vars['c_user']->value['id']) {?> class="active"<?php }?>>
                        <td><div class="rank_<?php echo $_smarty_tpl->tpl_vars['users']->value['users'][$_smarty_tpl->tpl_vars['user_id']->value]['rank'];?>
"></div><?php echo $_smarty_tpl->tpl_vars['users']->value['users'][$_smarty_tpl->tpl_vars['user_id']->value]['rank'];?>
</td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
profile/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['users']->value['users'][$_smarty_tpl->tpl_vars['user_id']->value]['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['users']->value['users'][$_smarty_tpl->tpl_vars['user_id']->value]['lname'];?>

                            </a>
                        </td>
                        <td style="direction: ltr;">
                            <?php echo $_smarty_tpl->tpl_vars['users']->value['users'][$_smarty_tpl->tpl_vars['user_id']->value]['score'];?>

                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </section>
        <!--work progress end-->
    </div>
</div><?php }} ?>
