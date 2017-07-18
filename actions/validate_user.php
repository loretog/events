<?php 

	$username = $_POST[ 'username' ];
	$password = md5( $_POST[ 'password' ] );
	$validate = $DB->query( "SELECT * FROM users WHERE usern = '$username' AND pwd = '$password'" );
	if( $validate && $validate->num_rows ) {
		$user = $validate->fetch_object();		
		$_SESSION[ 'usern' ] = $username;
		$_SESSION[ 'uid' ] = $user->id;
		$_SESSION[ 'memtype' ] = $user->memtype;
		header( "Location: " . SITE_URL );
	} else {
		$_SESSION[ 'message' ] = "User not found!";
		$_SESSION[ 'notif'] = "You are not logged in!";
	}