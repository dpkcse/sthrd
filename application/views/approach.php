<?php include('partials/head.php'); ?>
<div id="wrapper"> 
	<?php include('partials/nav.php'); ?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Our Approach</h2>
				<ul class="breadcrumbCus">
					<li><a href="<?php echo base_url(); ?>index.php/Home"><i class="icon-info-blocks material-icons">account_balance</i> Home</a></li>
					<li>Our Approach</li>
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
						<img style="padding: 15% 0 0 21%;" src="<?php echo base_url(); ?>assets/img/approch.jpg" alt="showcase image">
					</div>
					<div class="col-md-6">
						<div class="about-text">
							<h3><span class="color">Our Approach</span></h3>
							<?php if(COUNT($program) > 0){ ?>
								<!-- <p> </p> -->
								<p><?php echo $program[0]->approch_desc; ?></p>
							<?php } ?>
							<!-- <p>CBSC first invites brainstorming sessions to generate ideas about the training requirement of any project in cooperation with the sponsoring and lead agencies through training need assessment study and arrange programs approach to the needs and harnessing the potentialities of the trainees. CBSC then generates cost effective scheme to implement the desired program and manage the trainee’s logistics and other support services. Training needs assessment to help the clients identify their training requirements and to formulate and programs to meet such needs. </p> -->
							<!-- <p>Planning and designing training programs in collaboration with clientele/training institutes, including arrangement for the actual offering of short-term training courses. Management and trainer’s training which involves the development of in house training capabilities by he helping the clients to organize and develop their own training programs.</p> -->
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
<?php include('partials/foot.php'); ?>
