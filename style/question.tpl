<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
{$question.title}
            </header>
            <div class="panel-body">
                {$question.Q}
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <section class="panel">
            <header class="panel-heading">
نمونه ورودی
            </header>
            <div class="panel-body">
                <pre>{$question.si}</pre>
            </div>
        </section>
    </div>
    <div class="col-lg-6">
        <section class="panel">
            <header class="panel-heading">
نمونه خروجی
            </header>
            <div class="panel-body">
                <pre>{$question.so}</pre>
            </div>
        </section>
    </div>
</div>
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
        <section class="panel">
            <header class="panel-heading">
                ارسال پاسخ
            </header>
            <div class="panel-body">
{if $question.c_user_count_true > 0}
    <div class="tick"></div>
{else}
    <form action="{$main_url}judge/{$question.id}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <label for="code">کد:</label>
        <input type="file" class="gui-file" name="code" id="code">
        <label for="output">خروجی:</label>
        <input type="file" class="gui-file" name="output" id="output">
        <div>
            <button type="submit" class="btn btn-shadow btn-primary">ارسال</button>
            <button type="reset" class="btn btn-shadow btn-info" style="float: left;">لغو</button>
            <a href="{$main_url}input/{$question.id}" class="btn btn-shadow btn-danger" style="float: left;">دریافت ورودی</a>
        </div>
    </form>
{/if}
            </div>
        </section>
    </div>
</div>