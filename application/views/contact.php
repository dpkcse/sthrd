<?php include('partials/head.php'); ?>

<div id="wrapper" class="home-page"> 
    <?php include('partials/nav.php'); ?>
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Contact Us</h2>
                    <ul class="breadcrumbCus">
                        <li><a href="<?php echo base_url(); ?>index.php/Home"><i class="icon-info-blocks material-icons">account_balance</i> Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
    <section id="content" class="contentTest">

        <div class="container">

        <div class="row">
            <div class="col-md-6">
                <p> </p>

                <!-- Form itself -->
                <form name="sentMessage" id="contactForm"  novalidate> 
                    <div class="input-field"> 
                        <input type="text" name="name" class="form-control" 
                        id="name" required
                        data-validation-required-message="Please enter your name" />
                        <label for="name" class="">   Name </label> 
                        <p class="help-block"></p>

                    </div> 	
                    <div class="input-field"> 
                        <input type="email" class="form-control" id="email" required
                        data-validation-required-message="Please enter your email" /> 
                        <label for="name" class="">   Email </label> 
                    </div> 	

                    <div class="input-field"> 
                        <textarea rows="10" cols="100" required class="form-control materialize-textarea" 
                        idation-required-message="Please enter your message" minlength="5" 
                        data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
                        <label for="name" class="">   Message </label> 
                    </div> 		 
                    <div id="success"> </div> <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Send</button><br />
                </form>
                </div>
                <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7740252971835!2d103.85105731410229!3d1.3109379990438659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19c6f6979737%3A0x6577dd9db5b02859!2s30+Roberts+Ln%2C+Singapore+218309!5e0!3m2!1sen!2sbd!4v1546009289362" width="500" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </section>
<?php include('partials/foot.php'); ?>