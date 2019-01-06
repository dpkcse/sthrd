    <!--scrolling js-->
    <script src="<?php echo base_url(); ?>admin_web/js/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url(); ?>admin_web/js/scripts.js"></script>
    <!--//scrolling js-->
    <script src="<?php echo base_url(); ?>admin_web/js/bootstrap.min.js"> </script>
    <!----Calender -------->
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin_web/css/clndr.css" type="text/css" />
    <script src="<?php echo base_url(); ?>admin_web/js/underscore-min.js" type="text/javascript"></script>
    <script src= "<?php echo base_url(); ?>admin_web/js/moment-2.2.1.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_web/js/clndr.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_web/js/site.js" type="text/javascript"></script>
    <!----End Calender -------->

    <!--//sreen-gallery-cursual---->
    <!-- requried-jsfiles-for owl -->
    <link href="<?php echo base_url(); ?>admin_web/css/owl.carousel.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>admin_web/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 3,
                lazyLoad : true,
                autoPlay : true,
                pagination : true,
                nav:true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
</body>
</html>