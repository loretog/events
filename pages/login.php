<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>

<?php element( 'header' ); ?>

<div class="container">

    <div class="row">
    	<div class="col-lg-6" style="background-color:  #fff; margin-bottom: 15px;">
		<h1>Login</h1>
		<?php
			if( isset( $_SESSION[ 'message' ] ) && !empty( $_SESSION[ 'message' ] ) ) {
				echo "<h2>" . $_SESSION[ 'message' ] . "</h2>";
			} 
		?>
		<?php element( 'login_form' ) ?>
		</div>
		
	</div>
</div>

<?php element( 'footer' ); ?>