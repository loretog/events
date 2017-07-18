<form method="post">
		<input class="form-control" type="hidden" name="action" value="validate_user">
		<label>Username</label>
		<input class="form-control" type="text" name="username"><br>
		<label>Password</label>
		<input class="form-control" type="password" name="password"><br>
		<input  type="submit" name="" value="Login">
		<br>
		<br>
		<p>Not a member yet? <a href="<?php echo SITE_URL ?>?page=signup" color="blue"> Sign Up</a></p>
</form>