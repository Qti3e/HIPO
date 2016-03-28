<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-12 23:39:00
         compiled from "style/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1875825688566ca2043cb8c7-48936958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55ca50652ae3ab9ed61be067bcaf24f1da3faa24' => 
    array (
      0 => 'style/home.tpl',
      1 => 1449955084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1875825688566ca2043cb8c7-48936958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'contests' => 0,
    'id' => 0,
    'main_url' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566ca20452d716_72128000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ca20452d716_72128000')) {function content_566ca20452d716_72128000($_smarty_tpl) {?><div class="row state-overview">
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol terques">
                <i class="icon-user"></i>
            </div>
            <div class="value">
                <h1><?php echo $_smarty_tpl->tpl_vars['count']->value['user'];?>
</h1>
                <p>شرکت کننده</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol red">
                <i class="icon-cogs"></i>
            </div>
            <div class="value">
                <h1><?php echo $_smarty_tpl->tpl_vars['count']->value['contest'];?>
</h1>
                <p>مسابقه</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol yellow">
                <i class="icon-question"></i>
            </div>
            <div class="value">
                <h1><?php echo $_smarty_tpl->tpl_vars['count']->value['question'];?>
</h1>
                <p>سوال</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol blue">
                <i class="icon-double-angle-up"></i>
            </div>
            <div class="value">
                <h1><?php echo $_smarty_tpl->tpl_vars['count']->value['log'];?>
</h1>
                <p>ارسال</p>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                گزارش عملکرد
            </header>
            <div class="panel-body">
                <div id="hero-area" class="graph"></div>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                مسابقات درحال برگزاری
            </header>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>سطح</th>
                    <th>شروع</th>
                    <th>پایان</th>
                </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contests']->value['opens']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['id']->value+1;?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
contest/<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['name'];?>
</a></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>3) {?>خیلی سخت<?php } else {
if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>2) {?>سخت<?php } else {
if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>1) {?>متوسط<?php } else {
if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>0) {?>آسان<?php } else { ?>خیلی آسان<?php }
}
}
}?></td>
                        <td class="date"><?php echo $_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['start'];?>
</td>
                        <td class="date"><?php echo $_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['end'];?>
</td>
                    </tr>
                    <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>مسابقه ای در حال برگزاری نمی باشد.</td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <section class="panel">
            <header class="panel-heading">
مسابقات بعدی
            </header>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>سطح</th>
                    <th>شروع</th>
                    <th>پایان</th>
                </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contests']->value['soon']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['id']->value+1;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['name'];?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>3) {?>خیلی سخت<?php } else {
if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>2) {?>سخت<?php } else {
if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>1) {?>متوسط<?php } else {
if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>0) {?>آسان<?php } else { ?>خیلی آسان<?php }
}
}
}?></td>
                        <td class="date"><?php echo $_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['start'];?>
</td>
                        <td class="date"><?php echo $_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['end'];?>
</td>
                    </tr>
                    <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>فعلا مسابقه ای برگزار نخواهد شد.</td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
    <div class="col-sm-6">
        <section class="panel">
            <header class="panel-heading">
                مسابقات پایان یافته
            </header>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>سطح</th>
                    <th>شروع</th>
                    <th>پایان</th>
                </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contests']->value['finished']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['id']->value+1;?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
ranking/<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['name'];?>
</a></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>3) {?>خیلی سخت<?php } else {
if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>2) {?>سخت<?php } else {
if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>1) {?>متوسط<?php } else {
if ($_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['level']>0) {?>آسان<?php } else { ?>خیلی آسان<?php }
}
}
}?></td>
                        <td class="date"><?php echo $_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['start'];?>
</td>
                        <td class="date"><?php echo $_smarty_tpl->tpl_vars['contests']->value['contests'][$_smarty_tpl->tpl_vars['c']->value]['end'];?>
</td>
                    </tr>
                <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>مسابقه پایان یافته ای وجود ندارد.</td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
</div><?php }} ?>
