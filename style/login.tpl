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

    <div class="form-signin">
        <h2 class="form-signin-heading">ورود به عنوان کاربر</h2>
        <div class="login-wrap">
            <input id="username" type="text" class="form-control" style="text-align: center;" placeholder="نام کاربری"
                   autofocus>
            <input id="password" type="password" class="form-control" style="text-align: center;" placeholder="رمز عبور">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> مرا به یاد داشته باش
            </label>
            <button class="btn btn-lg btn-login btn-block" id="submit">ورود</button>
            <hr>
            <a style="color: #ffffff" href="{$main_url}register" class="btn btn-lg btn-info btn-block">عضویت</a>
            <div id="cm-error"></div>
        </div>

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
<script src="js/md5.js" ></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>
<script>

    $(document).ready(function() {
        var p = 0;
        $("#submit").bind('click',function(){
            $.post(
                    "{$main_url}login",
                    {
                        username: $("#username").val(),
                        password: hex_md5($("#password").val())
                    },
                    function(s){
                        if(s.code == "nok"){
                            $("#cm-error").html(
                                    "<div dir='rtl' class=\"alert alert-danger  fade in\">"+
                                    "<strong>نام کاربری یا رمز عبور اشتباه است</strong>"+
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
        });
    });
</script>

</body>
</html>