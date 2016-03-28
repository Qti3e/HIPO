<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                ویرایش مسابقه
            </header>
            <form class="form-horizontal" id="edit_info" role="form" method="post">
                <input type="hidden" name="change_info" value="true">
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="name" name="name" value="{$contest.name}">
                    </div>
                    <label for="name" class="col-lg-2 control-label">نام مسابقه</label>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="datetime-local" class="form-control" id="start" name="start" value="{$contest.start}">
                    </div>
                    <label for="start" class="col-lg-2 control-label">شروع</label>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="datetime-local" class="form-control" id="end" name="end" value="{$contest.end}">
                    </div>
                    <label for="end" class="col-lg-2 control-label">پایان</label>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-success">ذخیره</button>
                        <button type="reset" class="btn btn-default">لغو</button>
                    </div>
                </div>
            </form>

        </section>
    </div>
</div>