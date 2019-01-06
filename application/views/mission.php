<?php include('partials/head.php'); ?>
<div id="wrapper"> 
	<?php include('partials/nav.php'); ?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Our Mision</h2>
				<ul class="breadcrumbCus">
					<li><a href="<?php echo base_url(); ?>index.php/Home"><i class="icon-info-blocks material-icons">account_balance</i> Home</a></li>
					<li>Mission</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content" class="contentTest">
		<section class="section-padding">
			<div class="container">
				<div class="row showcase-section">
					<div class="col-md-6">
						<img style="padding: 0% 0 0 20%;" src="<?php echo base_url(); ?>assets/img/Mission.jpg" alt="showcase image">
					</div>
					<div class="col-md-6">
						<div class="about-text">
							<h3><span class="color">Mision</span></h3>
							<?php if(COUNT($program) > 0){ ?>
								<!-- <p> </p> -->
								<p><?php echo $program[0]->mnv_mission; ?></p>
							<?php } ?>
							<!-- <p>Ensure organizational effectiveness and global development by provide consultancy support to organizing and implementing high-quality training, study tour, skill enhancement and capacity building programs in Singapore for foreign clients through reputed training institute and Universities.</p> -->
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
<?php include('partials/foot.php'); ?>
