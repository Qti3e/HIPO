<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="AliReza Ghadimi">
    <base href="{$base}">
    <link rel="shortcut icon" href="../img/ico.png">
    <title>{$title}{if $dec neq ""}|{$dec}{/if}</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <div class="form-signup">
        <h2 class="form-signup-heading">فرم عضویت</h2>
        <form id="signupForm" class="login-wrap">
            <section class=" wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <span style="float: right;">اطلاعات حساب</span>
                        <hr>
                        <input name="email" id="email" type="text" class="form-control" style="text-align: center;" placeholder="پست الکترونیکی" >
                        <input name="username" id="username" type="text" class="form-control" style="text-align: center;" placeholder="نام کاربری" >
                        <input name="password" id="password" type="password" class="form-control" style="text-align: center;" placeholder="رمز عبور"><br>
                        <input name="confirm_password" id="confirm_password" type="password" class="form-control" style="text-align: center;" placeholder="تایید رمز عبور">
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <span style="float: right;">اطلاعات شخصی</span>
                        <hr>
                        <input name="firstname" id="firstname" type="text" class="form-control" style="text-align: center;" placeholder="نام" autofocus>
                        <input name="lastname" id="lastname" type="text" class="form-control" style="text-align: center;" placeholder="نام خانوادگی">
                        <input name="age" id="age" type="text" class="form-control" style="text-align: center;" placeholder="سن">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-sm-6">
                        <input  type="checkbox" style="width: 20px" class="checkbox form-control" name="agree" id="agree" />
                    </div>
                    <label for="agree" class="control-label col-lg-6 col-sm-6" style="text-align: right">قوانین عضویت را می پذیرم</label>
                </div>
            </section>
            <button class="btn btn-lg btn-login btn-block" id="submit">عضویت</button>
            <hr>
            <a style="color: #ffffff" href="{$main_url}login" class="btn btn-lg btn-info btn-block">وورد</a>
            <div id="cm-error"></div>
        </form>

    </div>

</div>
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script src="js/md5.js" ></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<script>
    var submitHandler = function() {
        $.post(
                "{$main_url}register",
                {
                    firstname:$("#firstname").val(),
                    lastname:$("#lastname").val(),
                    age:$("#age").val(),
                    email:$("#email").val(),
                    username: $("#username").val(),
                    password: hex_md5($("#password").val())
                },
                function(s){
                    if(s.code == 400){
                        $("#cm-error").html(
                                "<div dir='rtl' class=\"alert alert-danger  fade in\">"+
                                "<strong>نام کاربری از قبل موجود است</strong>"+
                                "<button style='float: left;' data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">"+
                                "<i class=\"icon-remove\"></i>"+
                                "</button>"+
                                "</div>"
                        );
                    }else{
                        window.location.reload();
                    }
                },"json"
        );
    };
</script>

<!--script for this page-->
<script src="js/register-form-validation-script.js"></script>



</body>
</html>