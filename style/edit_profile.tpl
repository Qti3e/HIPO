<div class="row">
    <aside class="profile-nav col-lg-3">
        <section class="panel">
            <div class="user-heading round">
                <a href="../profile/{$c_user.id}">
                    {*<img src="{$c_user.avatar}300" alt="">*}
                    <img src="img/profile-avatar.jpg" alt="">
                </a>
                <h1>{$c_user.fname} {$c_user.lname}</h1>
                <p>#{$c_user.rank}</p>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><a href="../profile/{$c_user.id}"> <i class="icon-user"></i> پروفایل</a></li>
                <li><a href="../resentActivity/{$c_user.id}"> <i class="icon-calendar"></i> آخرین فعالیت ها</a></li>
                <li class="active"><a href="{$main_url}edit_profile"> <i class="icon-edit"></i>ویرایش پروفایل</a></li>
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        <section class="panel">
            <div class="bio-graph-heading">
                {$c_user.des}
            </div>
            <div class="panel-body bio-graph-info">
                <h1>اطلاعات حساب کاربری</h1>
                <form class="form-horizontal" id="edit_info" action="{$main_url}edit_profile" role="form" method="post">
                    <input type="hidden" name="change_info" value="true">
                    <div class="form-group">
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="f-name" value="{$c_user.fname}" disabled="disabled">
                        </div>
                        <label for="f-name" class="col-lg-2 control-label">نام</label>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="l-name" value="{$c_user.lname}" disabled="disabled">
                        </div>
                        <label for="l-name" class="col-lg-2 control-label">نام خانوادگی</label>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10">
                            <input type="text" value="{$c_user.des}" placeholder="متنی درباره خودتان یا وضعیتتان را بنویسید...(این متن در بالای پروفایلتان نمایش داذه میشود)" id="about" name="about" class="form-control"/>
                        </div>
                        <label  class="col-lg-2 control-label">درباره من</label>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="age" name="age" value="{$c_user.age}" placeholder="سن">
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
        {*<section>*}
            {*<div class="panel panel-primary">*}
                {*<div class="panel-heading">تغییر رمز عبور</div>*}
                {*<div class="panel-body">*}
                    {*<form class="form-horizontal" method="post" action="{$main_url}edit_profile" id="edit_pass" role="form">*}
                        {*<input type="hidden" name="edit_pass" value="true">*}
                        {*<div class="form-group">*}
                            {*<div class="col-lg-10">*}
                                {*<input type="password" name="c-pwd" class="form-control" id="c-pwd" placeholder=" ">*}
                            {*</div>*}
                            {*<label class="col-lg-2 control-label">رمز عبور فعلی</label>*}
                        {*</div>*}
                        {*<div class="form-group">*}
                            {*<div class="col-lg-10">*}
                                {*<input type="password" class="form-control" name="n-pwd" id="n-pwd" placeholder=" ">*}
                            {*</div>*}
                            {*<label  class="col-lg-2 control-label">رمز عبور جدید</label>*}
                        {*</div>*}
                        {*<div class="form-group">*}
                            {*<div class="col-lg-10">*}
                                {*<input type="password" class="form-control" name="rt-pwd" id="rt-pwd" placeholder=" ">*}
                            {*</div>*}
                            {*<label  class="col-lg-2 control-label">تایید رمز عبور جدید</label>*}
                        {*</div>*}

                        {*<div class="form-group">*}
                            {*<div class="col-lg-offset-2 col-lg-10">*}
                                {*<button type="submit" class="btn btn-info">ذخیره</button>*}
                                {*<button type="reset" class="btn btn-default">لغو</button>*}
                            {*</div>*}
                        {*</div>*}
                    {*</form>*}
                {*</div>*}
            {*</div>*}
        {*</section>*}
    </aside>
</div>