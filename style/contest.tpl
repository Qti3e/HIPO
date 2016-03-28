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
        <!--work progress start-->
        <section class="panel">
            <div class="panel-body progress-panel">
                <div class="task-progress" style="float: right">
                    <h1>سوالات</h1>
                </div>
            </div>
            <table class="table table-hover personal-task">
                <tbody>
                <tr>
                    <td>*</td>
                    <td>
                        عنوان
                    </td>
                    <td>
                        سطح سوال
                    </td>
                    <td>
                        ارسال ها
                    </td>
                    <td>
ارسال های صحیح
                    </td>
                    <td>
                        ارسال های شما
                    </td>
                    <td>
                        ارسال های غلط شما
                    </td>

                </tr>
                {foreach $questions as $id=>$question}
                    <tr class="{if $problems.questions.{$question}.c_user_count_true eq 1}true{elseif $problems.questions.{$question}.c_user_count_false >= 1}false{/if}">
                        <td>{$id+1}</td>
                        <td>
                            <a href="{$main_url}question/{$question}">{$problems.questions.{$question}.title}</a>
                        </td>
                        <td>
                            {if $problems.questions.{$question}.level > 3}خیلی سخت{else}{if $problems.questions.{$question}.level > 2}سخت{else}{if $problems.questions.{$question}.level > 1}متوسط{else}{if $problems.questions.{$question}.level > 0}آسان{else}خیلی آسان{/if}{/if}{/if}{/if}
                        </td>
                        <td>
                            {$problems.questions.{$question}.count_true+$problems.questions.{$question}.count_false}
                        </td>
                        <td>
                            <span class="badge bg-success">{$problems.questions.{$question}.count_true}</span>
                        </td>
                        <td>
                            {$problems.questions.{$question}.c_user_count_true+$problems.questions.{$question}.c_user_count_false}
                        </td>
                        <td>
                            <span class="badge bg-important">{$problems.questions.{$question}.c_user_count_false}</span>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </section>
        <!--work progress end-->
    </div>
</div>