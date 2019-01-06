
<!DOCTYPE HTML>
<html>
<head>
<title>CBSC .:||:. ADMIN PANEL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="CAPACITY BUILDING CONSISTENCY SERVICES PTE. LTD. (CBSC)" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>admin_web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>admin_web/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>admin_web/css/font-awesome.css" rel="stylesheet"> 
<script src="<?php echo base_url(); ?>admin_web/js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="<?php echo base_url(); ?>admin_web/js/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>admin_web/js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url(); ?>admin_web/css/custom.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>admin_web/js/custom.js"></script>
<script src="<?php echo base_url(); ?>admin_web/js/screenfull.js"></script>
<script>
    $(function () {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

        if (!screenfull.enabled) {
            return false;
        }

        

        $('#toggle').click(function () {
            screenfull.toggle($('#container')[0]);
        });
        

        
    });
</script>

<!----->

<!--pie-chart--->
<script src="<?php echo base_url(); ?>admin_web/js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(document).ready(function () {
        $('#demo-pie-1').pieChart({
            barColor: '#3bb2d0',
            trackColor: '#eee',
            lineCap: 'round',
            lineWidth: 8,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        $('#demo-pie-2').pieChart({
            barColor: '#fbb03b',
            trackColor: '#eee',
            lineCap: 'butt',
            lineWidth: 8,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        $('#demo-pie-3').pieChart({
            barColor: '#ed6498',
            trackColor: '#eee',
            lineCap: 'square',
            lineWidth: 8,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        
    });
</script>
<!--skycons-icons-->
<script src="<?php echo base_url(); ?>admin_web/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>