<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>

<?php element( 'header' ); ?>

<div class="container">

    <div class="row">
    	
		<div class="col-lg-6" style="background-color:  #fff; margin-bottom: 15px;">
		<h1>Sign up</h1>
		<form method="post">
		<input class="form-control" type="hidden" name="action" value="add_user">
		<label>First Name</label>
		<input class="form-control" type="text" name="firstn"><br>
		<label>Last Name</label>
		<input class="form-control" type="text" name="lastn"><br>
		<label>Username</label>
		<input class="form-control" type="text" name="usern"><br>
		<label>Gender</label><br>
		Male <input class="form-control" class="gender" type="radio" name="gender" value="Male"> 
		<br>
		Female <input class="form-control" class="gender" type="radio" name="gender" value="Female"> 
		<br>
		<label>Yr &amp; Sec</label>
		<input class="form-control" type="text" name="yrsec"><br>
		<label>Mobile Number</label>
		<input class="form-control" type="text" name="mobile"><br>
		<label>Email Address</label>
		<input class="form-control" type="text" name="email"><br>
		<label>Student type</label><br>
		Regular <input class="form-control" class="studenttype" type="radio" name="stutype" value="Regular"> 
		<br>
		Irregular<input class="form-control" class="studenttype" type="radio" name="stutype" value="Irregular"> 
		<br>
		<label>Member Type</label><br>
		Admin <input class="form-control" class="membertype" type="radio" name="memtype" value="Admin"> 
		<br>
		Member <input class="form-control" class="membertype" type="radio" name="memtype" value="Member"> 
		<br>
		<label>Password</label>
		<input class="form-control" type="password" name="pwd"><br>
		<button type="submit">SIGN UP</button>
		</form>
		
		</div>
	</div>
</div>

<?php element( 'footer' ); ?>