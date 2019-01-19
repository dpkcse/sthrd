<?php include('partials/head.php'); ?>
<div id="wrapper" class="home-page"> 
    <?php include('partials/nav.php'); ?>
	<section id="banner">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
			<?php if(COUNT($allImg) > 0){
				foreach($allImg as $item) {
			?>
              <li>
                <img src="<?php echo base_url(); ?>upload/<?php echo $item->image; ?>" alt="" />
                <div class="flex-caption">
                    <h3><?php echo $item->head_one; ?></h3> 
					<p><?php echo $item->head_two; ?></p> 
				</div>
			  </li>
			<?php
				}
			} ?>
			<!-- <li>
                <img src="<?php echo base_url(); ?>assets/img/slides/1.jpg" alt="" />
                <div class="flex-caption" style="text-align: right !important;">
                    <h3>Business  Intellect</h3> 
					<p>We create best opportunities</p> 
				</div>
              </li> -->
              <!-- <li>
                <img src="<?php echo base_url(); ?>assets/img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Innovative Minds</h3> 
					<p>Success depends on productivity</p> 
				</div>
			  </li>
			  <li>
                <img src="<?php echo base_url(); ?>assets/img/slides/3.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Exploring Knowledge</h3> 
					<p>Peer to peer knowledge sharing</p> 
				</div>
              </li> -->
            </ul>
        </div>
	<!-- end slider --> 
	</section>  
	 	<section id="content" style="padding: 0px !important;"> 
			
	<div class="container">
	
	
		<section class="services">
	    	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">Capacity Building Consistency Services Pte. Ltd. (CBCS)</h2>Company UEN: 201841874K, 30 Robarts Lane # 02-01, Singapore 218309<br/> <p>
						<i class="icon-info-blocks material-icons" style="font-size: 14px;">call</i> (+65)  6396 6293/6341
						<i class="icon-info-blocks material-icons" style="font-size: 14px;">email</i> <a href="mailto:info@sthrd.com?Subject=Hello%" target="_top">info@CBCS.com</a>
					</p></a></div>
				<br/>
				<div class="aligncenter">
					<a href="<?php echo base_url(); ?>index.php/Who"" class="btn btn-primary waves-effect waves-dark">WHO WE ARE</a>
				</div>
			</div>
		</div>

	 <div class="row">
            <!-- <div class="col-sm-4 info-blocks">  
                <div class="info-blocks-in">
				<i class="icon-info-blocks material-icons">perm_identity</i>
                    <h3>Consulting</h3>
					<div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div> -->
            <div class="col-sm-12 info-blocks"> 
				 
					<div class="info-blocks-in">
						<div class="col-sm-6 info-blocks">
							<i class="icon-info-blocks material-icons">card_travel</i>
							<h3>Training</h3>
							<div class="line"></div>
							<p>CBCS works in association with reputed Training Agencies, Institutes and Universities, Education Institutions in Singapore to ensure the finest quality and result oriented capacity building programs. CBCS provides ‘one-stop solution’ for all relevant logistical facilities and services pertaining to implementation of the program</p>
						</div>
						<div class="col-sm-6 info-blocks"> 
							<img style="width: 63%;" src="<?php echo base_url(); ?>assets/img/IMG_1291.JPG" alt="" />
						</div>
					</div>
				</div>
				
            </div>
            <!-- <div class="col-sm-4 info-blocks">
                <div class="info-blocks-in">
                <i class="icon-info-blocks material-icons">important_devices</i>
                    <h3>Development</h3>
					<div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div> -->
        </div> 
		</section>
	</div>
	</section>
		<!-- <section class="dishes">
		<div class="container">
	 	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">Our Process</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, <br/>doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
				<br/>
			</div>
		</div>
	
	<div class="row service-v1 margin-bottom-40">
            <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/service1.jpg" alt="">  
                            <span class="card-title">Designing</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                        </div>
                    </div>        
            </div>
			   <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/service2.jpg" alt="">  
                            <span class="card-title">Development</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                        </div>
                    </div>        
            </div>
			   <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/service3.jpg" alt="">  
                            <span class="card-title">Quality</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                        </div>
                    </div>        
            </div> 
        </div>
		</div>
		</section> -->

	
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Our task to conduct Training/Study Tour Program</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="about-text">
					<?php if(COUNT($program) > 0){ ?>
						<!-- <p> </p> -->
                        <p><?php echo $program[0]->program_desc; ?></p>
					<?php } ?>
					
						
						<!-- <ul class="withArrow">
							<li><span class="fa fa-angle-right"></span> Obtain from the Clients</li>
							<li><span class="fa fa-angle-right"></span>STHRD first task to prepare Training/Study Tour Plan and budget and approved it from authority</li>
							<li><span class="fa fa-angle-right"></span> Identify and select training modalities to conduct training/study visit programs</li>
							<li><span class="fa fa-angle-right"></span>Prepare detailed program antennary as per client instruction and desire</li>
							<li><span class="fa fa-angle-right"></span>Assist to arrange travel visa</li>
							<li><span class="fa fa-angle-right"></span>Arrange air-tickets and confirm flights, departure and arrival</li>
							<li><span class="fa fa-angle-right"></span>With the communication of Client provide DSA (per diem) and allowances for out-of-pocket expenses to the participants at standard rates, not below the government rate, before departure from the country</li>
							<li><span class="fa fa-angle-right"></span>Conduct pre-departure briefings through electronic media</li>
						</ul> -->
					</div>
				</div>
				<!-- <div class="col-md-6 col-sm-6">
				<div class="about-text">
						<ul class="withArrow">
							<li><span class="fa fa-angle-right"></span>Organize suitable accommodation</li>
							<li><span class="fa fa-angle-right"></span>Provide airport reception and transfer; Provide full time land surface transport including weekends</li>
							<li><span class="fa fa-angle-right"></span>Offer a full time guide / welfare person during the entire period of stay in Singapore</li>
							<li><span class="fa fa-angle-right"></span>Arrange to visit places of educational and cultural interest</li>
							<li><span class="fa fa-angle-right"></span>Arrange working lunch during tour programs</li>
							<li><span class="fa fa-angle-right"></span>Monitor the study tour and follow-up progress of assignment and attend to matters</li>
							<li><span class="fa fa-angle-right"></span>Provide a descriptive training completion report</li>
							<li><span class="fa fa-angle-right"></span>Submit payment statements</li>
						</ul>
					</div>
				</div> -->
			</div>
		</div>
	</section>	  

<?php include('partials/foot.php'); ?>
