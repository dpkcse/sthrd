<?php include('partials/head.php'); ?>
<div class="login">
	<h1><a href="#">CBSC ADMIN LOGIN</a></h1>
	<div class="login-bottom">
		<h2>Login</h2>
		<p class="" class="color: #D95459; text-decoration: none; font-family: 'Muli-Regular'; padding: 0.3em;"><?php if($message != "NA") echo $message; ?></p>
		<form action="<?php echo base_url(); ?>index.php/Admin/login_check" method="post">
			<div class="col-md-12">
				<div class="login-mail">
					<input type="text" placeholder="Email" name="email" required="required">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="password" required="required">
					<i class="fa fa-lock"></i>
				</div>
				<div class="login-do">
					<label class="hvr-shutter-in-horizontal login-sub">
						<input type="submit" value="login">
					</label>
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</form>
	</div>
</div>
<!---->
<div class="copy-right">
	<p> &copy; CAPACITY BUILDING CONSISTENCY SERVICES PTE. LTD. (CBSC) | Design by <a href="#" target="_blank">SYSFINITY</a> </p>	    
</div>  
<?php include('partials/foot.php') ?>

