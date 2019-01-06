<nav class="navbar-default navbar-static-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<h1> <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Admin">CBSC ADMIN</a></h1>         
	</div>
	<!-- Brand and toggle get grouped for better mobile display -->
		 
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="drop-men" >
		<ul class=" nav_1">
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Rackham<i class="caret"></i></span><img src="<?php echo base_url(); ?>admin_web/images/img.png" style="width:27%;"></a>
				<ul class="dropdown-menu " role="menu">
					<li><a href="<?php echo base_url(); ?>index.php/Admin/logout"><i class="fa fa-clipboard"></i>Logout</a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
	<div class="clearfix"></div>
	  
	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li>
				<a href="<?php echo base_url(); ?>index.php/Admin" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">DASHBOARD</span> </a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/Admin/home_page" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">HOME PAGE IMAGE</span></a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/Admin/program" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">HOME PAGE PROGRAM</span> </a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/Admin/who_we_are" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">WHO WE ARE</span></a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/Admin/expertise" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">EXPERTISE</span> </a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/Admin/approch" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">APPROACH</span> </a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/Admin/facilities" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">FACILITIES</span></a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/Admin/methods_media" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">METHODS AND MEDIA</span> </a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/Admin/mission_vision" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">MISION AND VISION</span></a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/Admin/speciality" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">SPECIALTY</span></a>
			</li>
		</ul>
	</div>
	</div>
</nav>