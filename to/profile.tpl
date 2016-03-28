<div class="row">
    <aside class="profile-nav col-lg-3">
        <section class="panel">
            <div class="user-heading round">
                <a href="../profile/{$user_profile.id}">
                    <img src="{$user_profile.avatar}300" alt="">
                </a>
                <h1>{$user_profile.fname} {$user_profile.lname}</h1>
                <p>#{$user_profile.rank}</p>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="../profile/{$user_profile.id}"> <i class="icon-user"></i> پروفایل</a></li>
                <li><a href="../resentActivity/{$user_profile.id}"> <i class="icon-calendar"></i> آخرین فعالیت ها</a></li>
                {if $is_login eq true}
                    {if $user_profile.email eq $user.email}
                        <li><a href="../edit_profile"> <i class="icon-edit"></i>ویرایش پروفایل</a></li>
                    {/if}
                {/if}
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        <section class="panel">
            <div class="bio-graph-heading">
    {$user_profile.aboutMe}
            </div>
            <div class="panel-body bio-graph-info">
                <h1>{$user_profile.fname} در یک نگاه</h1>
                <div class="row">
                    <div class="bio-row">
                        <p><span>نام </span>: {$user_profile.fname}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>نام خانوادگی </span>: {$user_profile.lname}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>شهر </span>: {$user_profile.city}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>رتبه </span>: {$user_profile.rank}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>امتیاز </span>: {$user_profile.score}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>وب سایت </span>: <a href="{$user_profile.web}" target="_blank">{$user_profile.web}</a></p>
                    </div>
                    <div class="bio-row">
                        <p><span>پاسخ های صحیح</span>: {$user_profile._true}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>پاسخ های اشتباه</span>: {$user_profile._false}</p>
                    </div>
                    <div class="bio-row">
                        <p><span></span></p>
                    </div>
                    <div class="bio-row">
                        <p><span>کل ارسال ها</span>: {$user_profile._false+$user_profile._true}</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            {foreach $whatCan.{$user_profile.id} as $aK => $aV}
                            {foreachelse}
                                متاسفانه {$user_profile.fname} هنوز به سوالی پاسخ نداده است.
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
</div>