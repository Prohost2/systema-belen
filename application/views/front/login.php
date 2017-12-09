<div class="container" id="login">
	<div class="row">
		<div class="col-12 col-md-12">
			<p class="text-primary">Sign In!</p>
			<form action="<?php echo base_url('index.php/Login/signIn') ?>" method="post">
				<label for="#">User</label>
				<input type="text" name="user" class="form-control">
				<label for="#">Password</label>
				<input type="text" name="password" class="form-control">
				<br>
			</form>
			<a href="<?php echo base_url('index.php/home/') ?>"><button class="btn btn-secundary btn-block">Sign In</button></a>
		</div>
	</div>
</div>