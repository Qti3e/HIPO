<!DOCTYPE html>
<html dir="rtl" lang="en">
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
    <link href="assets/morris.js-0.4.3/morris.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    {if $debug eq true}
        <script type="application/javascript">
            window.setInterval(function(){
                window.location.reload();
            },1500);
        </script>
    {/if}
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <!--logo start-->
        <a href="{$main_url}" class="logo" ><span style="margin-left: 20px;">{$title}</span></a>
        <!--logo end-->
        <div class="top-nav ">
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="img/avatar1_small.jpg"><!--TODO $c_user.avatar|s29-->
                        <span class="username">{$c_user.fname} {$c_user.lname}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="{$main_url}profile/{$c_user.id}"><i class=" icon-suitcase"></i>پروفایل</a></li>
                        <li><a href="{$main_url}edit_profile"><i class="icon-cog"></i>تنظیمات</a></li>
                        <li><a href="#"><i class="icon-bell-alt"></i>اطلاعیه ها</a></li>
                        <li><a href="{$main_url}logout"><i class="icon-key"></i>خروج</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                {foreach $sideMenu as $m}
                    <li{if $page eq $m.2} class="active"{/if}>
                        <a class="" href="{$main_url}{$m.2}">
                            <i class="{$m.1}"></i>
                            <span>{$m.0}</span>
                        </a>
                    </li>
                {/foreach}
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->