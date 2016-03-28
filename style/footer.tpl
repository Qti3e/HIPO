    <span id="legal">Copyright (c) 2014-{date("y")} <a href="http://hipo.ir" target="_blank">HIPO!</a> All Rights Reserved.</span>
     <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>
<div id="loading"></div>
<!-- js placed at the end of the document so the pages load faster -->
     <script src="js/jquery.js"></script>
     <script src="js/jquery-1.8.3.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.scrollTo.min.js"></script>
     <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
     <script src="assets/morris.js-0.4.3/morris.min.js" type="text/javascript"></script>
     <script src="assets/morris.js-0.4.3/raphael-min.js" type="text/javascript"></script>
     <script src="assets/chart-master/Chart.js"></script>
     <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/md5.js" ></script>

     <!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<script type="application/javascript">
    {$footer_js}
</script>
<script src="js/all-chartjs.js"></script>
<script src="js/sparkline-chart.js"></script>

<script>

    //knob
    $(".knob").knob();
    $(window).on("load", function () {
        setTimeout(function () {
            $("#loading").hide();
        }, 300);
    });
</script>


</body>
</html>