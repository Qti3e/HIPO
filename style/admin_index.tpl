<div class="row state-overview">
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol terques">
                <i class="icon-user"></i>
            </div>
            <div class="value">
                <h1>{$count.user}</h1>
                <p>شرکت کننده</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol red">
                <i class="icon-cogs"></i>
            </div>
            <div class="value">
                <h1>{$count.contest}</h1>
                <p>مسابقه</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol yellow">
                <i class="icon-question"></i>
            </div>
            <div class="value">
                <h1>{$count.question}</h1>
                <p>سوال</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol blue">
                <i class="icon-double-angle-up"></i>
            </div>
            <div class="value">
                <h1>{$count.log}</h1>
                <p>ارسال</p>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                مسابقات درحال برگزاری
            </header>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>سطح</th>
                    <th>شروع</th>
                    <th>پایان</th>
                    <th>ابزار</th>
                </tr>
                </thead>
                <tbody>
                {foreach $contests.contests as $n=>$c}
                    <tr>
                        <td>{$n}</td>
                        <td><a href="{$main_url}admin_questions?contest={$c.id}">{$c.name}</a></td>
                        <td>{if $c.level > 3}خیلی سخت{else}{if $c.level > 2}سخت{else}{if $c.level > 1}متوسط{else}{if $c.level > 0}آسان{else}خیلی آسان{/if}{/if}{/if}{/if}</td>
                        <td class="date">{$c.start}</td>
                        <td class="date">{$c.end}</td>
                        <td class="date">
                            <a href="{$main_url}admin_contests?remove={$c.id}" class="btn btn-danger btn-sm"><i class="icon-remove"></i></a>
                            <a href="{$main_url}admin_contest_edit/{$c.id}" class="btn btn-success btn-sm"><i class="icon-pencil"></i></a>
                            <a href="{$main_url}admin_questions?contest={$c.id}" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
                        </td>
                    </tr>
                    {foreachelse}
                    <tr>
                        <td></td>
                        <td></td>
                        <td>مسابقه ای در حال برگزاری نمی باشد.</td>
                        <td></td>
                        <td></td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </section>
    </div>
</div>