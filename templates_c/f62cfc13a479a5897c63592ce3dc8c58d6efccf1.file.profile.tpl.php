<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-24 18:21:05
         compiled from "style/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1336096418566ca299e74a60-44532458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f62cfc13a479a5897c63592ce3dc8c58d6efccf1' => 
    array (
      0 => 'style/profile.tpl',
      1 => 1453656057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1336096418566ca299e74a60-44532458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566ca299ed9cb3_81482007',
  'variables' => 
  array (
    'user_profile' => 0,
    'c_user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ca299ed9cb3_81482007')) {function content_566ca299ed9cb3_81482007($_smarty_tpl) {?><div class="row">
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
                <li class="active"><a href="../profile/<?php echo $_smarty_tpl->tpl_vars['user_profile']->value['id'];?>
"> <i class="icon-user"></i> پروفایل</a></li>
                <li><a href="../resentActivity/<?php echo $_smarty_tpl->tpl_vars['user_profile']->value['id'];?>
"> <i class="icon-calendar"></i> آخرین فعالیت ها</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['c_user']->value['id']==$_smarty_tpl->tpl_vars['user_profile']->value['id']) {?>
                        <li><a href="../edit_profile"> <i class="icon-edit"></i>ویرایش پروفایل</a></li>
                    <?php }?>
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        <section class="panel">
            <div class="bio-graph-heading">
                <?php echo $_smarty_tpl->tpl_vars['user_profile']->value['des'];?>

            </div>
            <div class="panel-body bio-graph-info">
                <h1><?php echo $_smarty_tpl->tpl_vars['user_profile']->value['fname'];?>
 در یک نگاه</h1>
                <div class="row">
                    <div class="bio-row">
                        <p><span>نام </span>: <?php echo $_smarty_tpl->tpl_vars['user_profile']->value['fname'];?>
</p>
                    </div>
                    <div class="bio-row">
                        <p><span>نام خانوادگی </span>: <?php echo $_smarty_tpl->tpl_vars['user_profile']->value['lname'];?>
</p>
                    </div>
                    <div class="bio-row">
                        <p><span>رتبه </span>: <?php echo $_smarty_tpl->tpl_vars['user_profile']->value['rank'];?>
</p>
                    </div>
                    <div class="bio-row">
                        <p><span>امتیاز </span>: <?php echo $_smarty_tpl->tpl_vars['user_profile']->value['score'];?>
</p>
                    </div>
                    <div class="bio-row">
                        <p><span>پاسخ های صحیح</span>: <?php echo $_smarty_tpl->tpl_vars['user_profile']->value['_true'];?>
</p>
                    </div>
                    <div class="bio-row">
                        <p><span>پاسخ های اشتباه</span>: <?php echo $_smarty_tpl->tpl_vars['user_profile']->value['_false'];?>
</p>
                    </div>
                    <div class="bio-row">
                        <p><span></span></p>
                    </div>
                    <div class="bio-row">
                        <p><span>کل ارسال ها</span>: <?php echo $_smarty_tpl->tpl_vars['user_profile']->value['_false']+$_smarty_tpl->tpl_vars['user_profile']->value['_true'];?>
</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-sm-9">
                    <section class="panel">
                        <header class="panel-heading">
                            گزارش عملکرد
                        </header>
                        <div class="panel-body">
                            <div id="hero-area" class="graph"></div>
                        </div>
                    </section>
                </div>
                <div class="col-sm-3">
                    <section class="panel">
                        <header class="panel-heading">
درصد پاسخگویی                        </header>
                        <div class="panel-body">
                            <div id="hero-donut" class="graph"></div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </aside>
</div><?php }} ?>
