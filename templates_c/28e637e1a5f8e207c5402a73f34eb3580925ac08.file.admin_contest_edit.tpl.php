<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-25 23:57:29
         compiled from "style/admin_contest_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127213295356a69f2c807850-34113529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28e637e1a5f8e207c5402a73f34eb3580925ac08' => 
    array (
      0 => 'style/admin_contest_edit.tpl',
      1 => 1453762644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127213295356a69f2c807850-34113529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a69f2c808399_76694998',
  'variables' => 
  array (
    'contest' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a69f2c808399_76694998')) {function content_56a69f2c808399_76694998($_smarty_tpl) {?><div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                ویرایش مسابقه
            </header>
            <form class="form-horizontal" id="edit_info" role="form" method="post">
                <input type="hidden" name="change_info" value="true">
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['contest']->value['name'];?>
">
                    </div>
                    <label for="name" class="col-lg-2 control-label">نام مسابقه</label>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="datetime-local" class="form-control" id="start" name="start" value="<?php echo $_smarty_tpl->tpl_vars['contest']->value['start'];?>
">
                    </div>
                    <label for="start" class="col-lg-2 control-label">شروع</label>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="datetime-local" class="form-control" id="end" name="end" value="<?php echo $_smarty_tpl->tpl_vars['contest']->value['end'];?>
">
                    </div>
                    <label for="end" class="col-lg-2 control-label">پایان</label>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-success">ذخیره</button>
                        <button type="reset" class="btn btn-default">لغو</button>
                    </div>
                </div>
            </form>

        </section>
    </div>
</div><?php }} ?>
