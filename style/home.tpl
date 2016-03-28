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
                گزارش عملکرد
            </header>
            <div class="panel-body">
                <div id="hero-area" class="graph"></div>
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
                </tr>
                </thead>
                <tbody>
                {foreach $contests.opens as $id=>$c}
                    <tr>
                        <td>{$id+1}</td>
                        <td><a href="{$main_url}contest/{$c}">{$contests.contests.{$c}.name}</a></td>
                        <td>{if $contests.contests.{$c}.level > 3}خیلی سخت{else}{if $contests.contests.{$c}.level > 2}سخت{else}{if $contests.contests.{$c}.level > 1}متوسط{else}{if $contests.contests.{$c}.level > 0}آسان{else}خیلی آسان{/if}{/if}{/if}{/if}</td>
                        <td class="date">{$contests.contests.{$c}.start}</td>
                        <td class="date">{$contests.contests.{$c}.end}</td>
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
<div class="row">
    <div class="col-sm-6">
        <section class="panel">
            <header class="panel-heading">
مسابقات بعدی
            </header>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>سطح</th>
                    <th>شروع</th>
                    <th>پایان</th>
                </tr>
                </thead>
                <tbody>
                {foreach $contests.soon as $id=>$c}
                    <tr>
                        <td>{$id+1}</td>
                        <td>{$contests.contests.{$c}.name}</td>
                        <td>{if $contests.contests.{$c}.level > 3}خیلی سخت{else}{if $contests.contests.{$c}.level > 2}سخت{else}{if $contests.contests.{$c}.level > 1}متوسط{else}{if $contests.contests.{$c}.level > 0}آسان{else}خیلی آسان{/if}{/if}{/if}{/if}</td>
                        <td class="date">{$contests.contests.{$c}.start}</td>
                        <td class="date">{$contests.contests.{$c}.end}</td>
                    </tr>
                    {foreachelse}
                    <tr>
                        <td></td>
                        <td></td>
                        <td>فعلا مسابقه ای برگزار نخواهد شد.</td>
                        <td></td>
                        <td></td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </section>
    </div>
    <div class="col-sm-6">
        <section class="panel">
            <header class="panel-heading">
                مسابقات پایان یافته
            </header>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>سطح</th>
                    <th>شروع</th>
                    <th>پایان</th>
                </tr>
                </thead>
                <tbody>
                {foreach $contests.finished as $id=>$c}
                    <tr>
                        <td>{$id+1}</td>
                        <td><a href="{$main_url}ranking/{$c}">{$contests.contests.{$c}.name}</a></td>
                        <td>{if $contests.contests.{$c}.level > 3}خیلی سخت{else}{if $contests.contests.{$c}.level > 2}سخت{else}{if $contests.contests.{$c}.level > 1}متوسط{else}{if $contests.contests.{$c}.level > 0}آسان{else}خیلی آسان{/if}{/if}{/if}{/if}</td>
                        <td class="date">{$contests.contests.{$c}.start}</td>
                        <td class="date">{$contests.contests.{$c}.end}</td>
                    </tr>
                {foreachelse}
                    <tr>
                        <td></td>
                        <td></td>
                        <td>مسابقه پایان یافته ای وجود ندارد.</td>
                        <td></td>
                        <td></td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </section>
    </div>
</div>