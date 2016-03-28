<div class="row">
    <aside class="profile-nav col-lg-3">
        <section class="panel">
            <div class="user-heading round">
                <a href="../profile/{$user_profile.id}">
                    {*<img src="{$user_profile.avatar}300" alt="">*}
                    <img src="img/profile-avatar.jpg" alt="">
                </a>
                <h1>{$user_profile.fname} {$user_profile.lname}</h1>
                <p>#{$user_profile.rank}</p>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><a href="../profile/{$user_profile.id}"> <i class="icon-user"></i> پروفایل</a></li>
                <li class="active"><a href="../resentActivity/{$user_profile.id}"> <i class="icon-calendar"></i> آخرین فعالیت ها</a></li>
                {if $c_user.id eq $user_profile.id}
                    <li><a href="../edit_profile"> <i class="icon-edit"></i>ویرایش پروفایل</a></li>
                {/if}
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        <section class="panel">
            <header class="panel-heading summary-head">
                <h4>آخرین فعالیت های  {$user_profile.fname}</h4>
            </header>
            <div class="panel-body">
                <div class="activity terques">
                    {foreach $logs.users.{$user_profile.id} as $lID}
                        <div class="activity-desk">
                            <div class="panel col-sm-12">
                                <div class="panel-body">
                                    <i class=" icon-time"></i>
                                    <h4 dir="ltr">{$logs.logs.{$lID}.date}</h4>
                                    <p>ارسال پاسخ
                                        {if $logs.logs.{$lID}.tof eq 1}
                                            <b style="color:#a9d86e;">درست</b>
                                        {else}
                                            <b style="color:#ff6c60;">نادرست</b>
                                        {/if}
                                        برای سوال
                                        {$problems.questions.{$logs.logs.{$lID}.q}.title}
                                        در مسابقه
                                        {$contests.contests.{$logs.logs.{$lID}.contest}.name}
                                    </p>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </div>
        </section>
    </aside>
</div>