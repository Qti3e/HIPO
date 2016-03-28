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
                    {foreach $q as $id}
                        <td>
                            {$problems.questions.{$id}.title}
                        </td>
                    {/foreach}
                    <td>
مجموع امتیاز
                    </td>
                    <td>
                        رتبه کلی
                    </td>
                </tr>
                {foreach $ranks as $id=>$rank}
                    {foreach $ranks.$id as $user_id}
                        <tr {if $users.users.{$user_id}.id eq $c_user.id} class="active"{/if}>
                            <td><div class="rank_{$users.users.{$user_id}.rank}"></div>{$id}</td>
                            <td>
                                <a href="{$main_url}profile/{$user_id}">
                                    {$users.users.{$user_id}.fname} {$users.users.{$user_id}.lname}
                                </a>
                            </td>
                            {foreach $q as $Q_id}
                                {if isset($questions.{$user_id}.{$Q_id})}
                                    {if isset($questions.{$user_id}.{$Q_id}._true)}
                                        <td style="color: #a9d86e;font-size: 17px;direction: ltr">
                                            {if isset($questions.{$user_id}.{$Q_id}._false)}
                                                {(-10*$questions.{$user_id}.{$Q_id}._false)+100}<br>
                                                <small style="color: #ff6c60;font-size: 10px;">-{$questions.{$user_id}.{$Q_id}._false}</small>
                                            {else}
                                                +100
                                            {/if}
                                        </td>
                                    {else}
                                        <td style="color: #ff6c60;font-size: 17px;direction: ltr">
                                            <b>{$questions.{$user_id}.{$Q_id}._false * -10}</b>
                                        </td>
                                    {/if}
                                {else}
                                    <td style="font-size: 25px;direction: ltr">
                                        <b>0</b>
                                    </td>
                                {/if}
                            {/foreach}
                            <td style="direction: ltr">
                                {$scores.$id}
                            </td>
                            <td>
                                {$users.users.{$user_id}.rank}
                            </td>
                        </tr>
                    {/foreach}
                {/foreach}
                </tbody>
            </table>
        </section>
        <!--work progress end-->
    </div>
</div>