<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$description}">
    <meta name="author" content="AliReza Ghadimi">
    <meta name="keyword" content="{$keyword}">
    <base href="{$base}">
    <link rel="shortcut icon" href="../style/img/favicon.html">
    <title>{$fa_title}{$title}</title>

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../style/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../style/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../style/css/style.css" rel="stylesheet">
    <link href="../style/css/style-responsive.css" rel="stylesheet" />

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
                <span class="pull-right"> <a href="#"> رمز خود را فراموش کرده ام</a></span>
            </label>
            <button class="btn btn-lg btn-login btn-block" id="submit">ورود</button>
            <div id="cm-error"></div>
        </div>

    </div>

</div>
<!-- js placed at the end of the document so the pages load faster -->
<script src="../style/js/jquery.js"></script>
<script src="../style/js/jquery-1.8.3.min.js"></script>
<script src="../style/js/bootstrap.min.js"></script>
<script src="../style/js/jquery.scrollTo.min.js"></script>
<script src="../style/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../style/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="../style/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="../style/js/owl.carousel.js" ></script>
<script src="../style/js/jquery.customSelect.min.js" ></script>

<!--common script for all pages-->
<script src="../style/js/common-scripts.js"></script>
<script>

    $(document).ready(function() {
        var p = 0;
        $("#submit").bind('click',function(){
            $.post(
                    "{$main_url}login",
                    {
                        username: $("#username").val(),
                        password: $("#password").val()
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
                            $(".captcha").each(function(n){
                                this.src = "captcha.php?act=img&id="+n+"&s="+p;
                            });
                            p++;
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