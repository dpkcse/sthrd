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

    
    <section id="content">

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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d255278.11519234796!2d103.6839477!3d1.3440852!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1767b42b8ec9%3A0x400f7acaedaa420!2sSingapore!5e0!3m2!1sen!2sbd!4v1544335981860" width="500" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </section>
<?php include('partials/foot.php'); ?>