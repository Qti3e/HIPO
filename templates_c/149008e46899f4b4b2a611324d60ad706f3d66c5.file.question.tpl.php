<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-12 23:45:48
         compiled from "style/question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1859670298566ca39c81d1b9-49709312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '149008e46899f4b4b2a611324d60ad706f3d66c5' => 
    array (
      0 => 'style/question.tpl',
      1 => 1450135703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1859670298566ca39c81d1b9-49709312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'question' => 0,
    'main_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566ca39c869b97_42255143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ca39c869b97_42255143')) {function content_566ca39c869b97_42255143($_smarty_tpl) {?><div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
<?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>

            </header>
            <div class="panel-body">
                <?php echo $_smarty_tpl->tpl_vars['question']->value['Q'];?>

            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <section class="panel">
            <header class="panel-heading">
نمونه ورودی
            </header>
            <div class="panel-body">
                <pre><?php echo $_smarty_tpl->tpl_vars['question']->value['si'];?>
</pre>
            </div>
        </section>
    </div>
    <div class="col-lg-6">
        <section class="panel">
            <header class="panel-heading">
نمونه خروجی
            </header>
            <div class="panel-body">
                <pre><?php echo $_smarty_tpl->tpl_vars['question']->value['so'];?>
</pre>
            </div>
        </section>
    </div>
</div>
<div class="row">
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
        <section class="panel">
            <header class="panel-heading">
                ارسال پاسخ
            </header>
            <div class="panel-body">
<?php if ($_smarty_tpl->tpl_vars['question']->value['c_user_count_true']>0) {?>
    <div class="tick"></div>
<?php } else { ?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
judge/<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <label for="code">کد:</label>
        <input type="file" class="gui-file" name="code" id="code">
        <label for="output">خروجی:</label>
        <input type="file" class="gui-file" name="output" id="output">
        <div>
            <button type="submit" class="btn btn-shadow btn-primary">ارسال</button>
            <button type="reset" class="btn btn-shadow btn-info" style="float: left;">لغو</button>
            <a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
input/<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
" class="btn btn-shadow btn-danger" style="float: left;">دریافت ورودی</a>
        </div>
    </form>
<?php }?>
            </div>
        </section>
    </div>
</div><?php }} ?>
