<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-24 20:21:38
         compiled from "style/edit_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1996450295566ca73b641a25-91151787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65aace918a5f28352ab97f9283f1247bfb4f27bb' => 
    array (
      0 => 'style/edit_profile.tpl',
      1 => 1453663257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1996450295566ca73b641a25-91151787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566ca73b642205_35501110',
  'variables' => 
  array (
    'c_user' => 0,
    'main_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ca73b642205_35501110')) {function content_566ca73b642205_35501110($_smarty_tpl) {?><div class="row">
    <aside class="profile-nav col-lg-3">
        <section class="panel">
            <div class="user-heading round">
                <a href="../profile/<?php echo $_smarty_tpl->tpl_vars['c_user']->value['id'];?>
">
                    
                    <img src="img/profile-avatar.jpg" alt="">
                </a>
                <h1><?php echo $_smarty_tpl->tpl_vars['c_user']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['c_user']->value['lname'];?>
</h1>
                <p>#<?php echo $_smarty_tpl->tpl_vars['c_user']->value['rank'];?>
</p>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><a href="../profile/<?php echo $_smarty_tpl->tpl_vars['c_user']->value['id'];?>
"> <i class="icon-user"></i> پروفایل</a></li>
                <li><a href="../resentActivity/<?php echo $_smarty_tpl->tpl_vars['c_user']->value['id'];?>
"> <i class="icon-calendar"></i> آخرین فعالیت ها</a></li>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
edit_profile"> <i class="icon-edit"></i>ویرایش پروفایل</a></li>
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        <section class="panel">
            <div class="bio-graph-heading">
                <?php echo $_smarty_tpl->tpl_vars['c_user']->value['des'];?>

            </div>
            <div class="panel-body bio-graph-info">
                <h1>اطلاعات حساب کاربری</h1>
                <form class="form-horizontal" id="edit_info" action="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
edit_profile" role="form" method="post">
                    <input type="hidden" name="change_info" value="true">
                    <div class="form-group">
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="f-name" value="<?php echo $_smarty_tpl->tpl_vars['c_user']->value['fname'];?>
" disabled="disabled">
                        </div>
                        <label for="f-name" class="col-lg-2 control-label">نام</label>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="l-name" value="<?php echo $_smarty_tpl->tpl_vars['c_user']->value['lname'];?>
" disabled="disabled">
                        </div>
                        <label for="l-name" class="col-lg-2 control-label">نام خانوادگی</label>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10">
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['c_user']->value['des'];?>
" placeholder="متنی درباره خودتان یا وضعیتتان را بنویسید...(این متن در بالای پروفایلتان نمایش داذه میشود)" id="about" name="about" class="form-control"/>
                        </div>
                        <label  class="col-lg-2 control-label">درباره من</label>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="age" name="age" value="<?php echo $_smarty_tpl->tpl_vars['c_user']->value['age'];?>
" placeholder="سن">
                        </div>
                        <label for="age" class="col-lg-2 control-label">سن</label>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-success">ذخیره</button>
                            <button type="reset" class="btn btn-default">لغو</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
            
                
                
                    
                        
                        
                            
                                
                            
                            
                        
                        
                            
                                
                            
                            
                        
                        
                            
                                
                            
                            
                        

                        
                            
                                
                                
                            
                        
                    
                
            
        
    </aside>
</div><?php }} ?>
