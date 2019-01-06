<?php include('partials/head.php'); ?>
<div id="wrapper"> 
	<?php include('partials/nav.php'); ?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Area of Expertise</h2>
				<ul class="breadcrumbCus">
					<li><a href="<?php echo base_url(); ?>index.php/Home"><i class="icon-info-blocks material-icons">account_balance</i> Home</a></li>
					<li>Area of Expertise</li>
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
							<!-- <p>STHRD provides capacity development training program and facilitates high profile apprenticeship and mentoring to</p>

							<ul class="withArrow">
								<li><span class="fa fa-angle-right"></span> Government</li>
								<li><span class="fa fa-angle-right"></span> NGO and corporate officials in the arena of primary education</li>
								<li><span class="fa fa-angle-right"></span> Secondary Education</li>
								<li><span class="fa fa-angle-right"></span> TVET</li>
								<li><span class="fa fa-angle-right"></span> Health</li>
								<li><span class="fa fa-angle-right"></span> Agriculture</li>
								<li><span class="fa fa-angle-right"></span> Finance</li>
								<li><span class="fa fa-angle-right"></span> Human Resources</li>
								<li><span class="fa fa-angle-right"></span> Monitoring & Evaluation</li>
								<li><span class="fa fa-angle-right"></span> Public and local governance skills</li>
								<li><span class="fa fa-angle-right"></span> Organizational management skills</li>
								<li><span class="fa fa-angle-right"></span> Entrepreneurship</li>
								<li><span class="fa fa-angle-right"></span> Disaster management</li>
								<li><span class="fa fa-angle-right"></span> Finance and income generations</li>
								<li><span class="fa fa-angle-right"></span> Women entrepreneurship and empowerment</li>
								<li><span class="fa fa-angle-right"></span> Guidance and counseling</li>
							</ul> -->
							<?php if(COUNT($program) > 0){ ?>
								<!-- <p> </p> -->
								<p><?php echo $program[0]->expertise_desc; ?></p>
							<?php } ?>
							<!-- <p>CBSC provide consultancy services in capacity development training program in the field of primary education, secondary education, TVET, health, agriculture, finance, human resources, monitoring & evaluation, public and local governance skills, organizational management skills, entrepreneurship, disaster management, finance and income generations, women entrepreneurship and empowerment, guidance and counseling etc. with the collaboration of respective training institutes. CBSC works in association with reputed Training Agencies, Institutes and Universities, Education Institutions in Singapore to ensure the finest quality and result oriented capacity building programs. CBSC provides ‘one-stop solution’ for all relevant logistical facilities and services pertaining to implementation of the program.</p> -->
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="about-image" style="text-align: center;">
							<img src="<?php echo base_url(); ?>assets/img/expertise.jpg" alt="About Images"  style="width:50%;">
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
<?php include('partials/foot.php'); ?>
