<?php

	$uid = $_POST[ 'uid' ];
	$message = $_POST[ 'message' ];

	if( $DB->query( "UPDATE comments (id, message, date) VALUES( $uid, '$message', NOW() )" ) ) {

	}