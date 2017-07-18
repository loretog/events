<?php

	$uid = $_POST[ 'uid' ];
	$message = $_POST[ 'message' ];

	if( $DB->query( "INSERT INTO comments (id, message, date) VALUES( $uid, '$message', NOW() )" ) ) {

	}