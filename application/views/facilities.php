<?php include('partials/head.php'); ?>
<div id="wrapper"> 
	<?php include('partials/nav.php'); ?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Our Facilities</h2>
				<ul class="breadcrumbCus">
					<li><a href="<?php echo base_url(); ?>index.php/Home"><i class="icon-info-blocks material-icons">account_balance</i> Home</a></li>
					<li>Our Facilities</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content" class="contentTest">
		<section class="section-padding">
			<div class="container">
				<div class="row showcase-section">
				<div class="col-md-6 col-sm-6">
						<div class="about-text">
							<h3><span class="color">Our Facilities</span> </h3>
							<?php if(COUNT($program) > 0){ ?>
								<p><?php echo $program[0]->facilities_desc; ?></p>
							<?php } ?>
							
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<img style="width:548px; height: 298px;" src="<?php echo base_url(); ?>upload/<?php echo $img; ?>" alt="About Images" >
					</div>
				</div>
			</div>
		</section>
	</section>
<?php include('partials/foot.php'); ?>
