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
                <li><a href="../profile/{$user_profile.id}"> <i class="icon-user"></i> پروفایل</a></li>
                <li class="active"><a href="../resentActivity/{$user_profile.id}"> <i class="icon-calendar"></i> آخرین فعالیت ها</a></li>
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
            <div class="panel-body profile-activity">
                <h5 class="pull-right">فعالیت های {$user_profile.fname}</h5>
                {foreach $user_profile.log as $Ulog}
                    <div class="activity alt terques">
                                  <span>
                                      <i class="{if $Ulog.accept eq 1}icon-ok{else}icon-minus{/if}"></i>
                                  </span>
                        <div class="activity-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="arrow-alt"></div>
                                    <i class=" icon-time"></i>
                                    <h4>$Ulog.date</h4>
                                    <p>
                                        {if $Ulog.accept eq 1}
                                            پاسخ صحیح برای سوال
                                        {else}
                                            پاسخ اشتباه برای سوال
                                        {/if}
                                        {$Ulog.problem}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                {foreachelse}
                <div class="activity alt terques">
                    <div class="alert alert-info fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        <strong>عجیب!</strong>{$user_profile.fname} بدون هیچ فعالیتی!
                    </div>
                    </div>
                {/foreach}

            </div>
        </section>
    </aside>
</div>