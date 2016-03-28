<div class="row">
    <div class="col-lg-12">
        <!--work progress start-->
        <section class="panel">
            <div class="panel-body progress-panel">
                <div class="task-progress" style="float: right">
                    <h1>{$dec}</h1>
                </div>
            </div>
            <table class="table table-hover personal-task">
                <tbody>
                <tr>
                    <td>رتبه</td>
                    <td>
                        نام کاربر
                    </td>
                    <td>
                        مجموع امتیاز
                    </td>
                </tr>
                {foreach $ranks as $user_id=>$user}
                    <tr {if $users.users.{$user_id}.id eq $c_user.id} class="active"{/if}>
                        <td><div class="rank_{$users.users.{$user_id}.rank}"></div>{$users.users.{$user_id}.rank}</td>
                        <td>
                            <a href="{$main_url}profile/{$user_id}">
                                {$users.users.{$user_id}.fname} {$users.users.{$user_id}.lname}
                            </a>
                        </td>
                        <td style="direction: ltr;">
                            {$users.users.{$user_id}.score}
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </section>
        <!--work progress end-->
    </div>
</div>