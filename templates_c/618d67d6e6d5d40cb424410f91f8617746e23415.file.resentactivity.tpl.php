<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-24 22:47:09
         compiled from "style/resentactivity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176374795356a53ee8ee4c09-45441323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '618d67d6e6d5d40cb424410f91f8617746e23415' => 
    array (
      0 => 'style/resentactivity.tpl',
      1 => 1453672028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176374795356a53ee8ee4c09-45441323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a53ee900ce56_08906950',
  'variables' => 
  array (
    'user_profile' => 0,
    'c_user' => 0,
    'logs' => 0,
    'lID' => 0,
    'problems' => 0,
    'contests' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a53ee900ce56_08906950')) {function content_56a53ee900ce56_08906950($_smarty_tpl) {?><div class="row">
    <aside class="profile-nav col-lg-3">
        <section class="panel">
            <div class="user-heading round">
                <a href="../profile/<?php echo $_smarty_tpl->tpl_vars['user_profile']->value['id'];?>
">
                    
                    <img src="img/profile-avatar.jpg" alt="">
                </a>
                <h1><?php echo $_smarty_tpl->tpl_vars['user_profile']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user_profile']->value['lname'];?>
</h1>
                <p>#<?php echo $_smarty_tpl->tpl_vars['user_profile']->value['rank'];?>
</p>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><a href="../profile/<?php echo $_smarty_tpl->tpl_vars['user_profile']->value['id'];?>
"> <i class="icon-user"></i> پروفایل</a></li>
                <li class="active"><a href="../resentActivity/<?php echo $_smarty_tpl->tpl_vars['user_profile']->value['id'];?>
"> <i class="icon-calendar"></i> آخرین فعالیت ها</a></li>
                <?php if ($_smarty_tpl->tpl_vars['c_user']->value['id']==$_smarty_tpl->tpl_vars['user_profile']->value['id']) {?>
                    <li><a href="../edit_profile"> <i class="icon-edit"></i>ویرایش پروفایل</a></li>
                <?php }?>
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        <section class="panel">
            <header class="panel-heading summary-head">
                <h4>آخرین فعالیت های  <?php echo $_smarty_tpl->tpl_vars['user_profile']->value['fname'];?>
</h4>
            </header>
            <div class="panel-body">
                <div class="activity terques">
                    <?php  $_smarty_tpl->tpl_vars['lID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value['users'][$_smarty_tpl->tpl_vars['user_profile']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lID']->key => $_smarty_tpl->tpl_vars['lID']->value) {
$_smarty_tpl->tpl_vars['lID']->_loop = true;
?>
                        <div class="activity-desk">
                            <div class="panel col-sm-12">
                                <div class="panel-body">
                                    <i class=" icon-time"></i>
                                    <h4 dir="ltr"><?php echo $_smarty_tpl->tpl_vars['logs']->value['logs'][$_smarty_tpl->tpl_vars['lID']->value]['date'];?>
</h4>
                                    <p>ارسال پاسخ
                                        <?php if ($_smarty_tpl->tpl_vars['logs']->value['logs'][$_smarty_tpl->tpl_vars['lID']->value]['tof']==1) {?>
                                            <b style="color:#a9d86e;">درست</b>
                                        <?php } else { ?>
                                            <b style="color:#ff6c60;">نادرست</b>
                                        <?php }?>
                                        برای سوال
                                        <?php echo $_smarty_tpl->tpl_vars['problems']->value['questions'][$_smarty_tpl->tpl_vars['logs']->value['logs'][$_smarty_tpl->tpl_vars['lID']->value]['q']]['title'];?>

                                        در مسابقه
                                        <?php echo $_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['logs']->value['logs'][$_smarty_tpl->tpl_vars['lID']->value]['contest']]['name'];?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </aside>
</div><?php }} ?>
