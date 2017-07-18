<?php

	$cid = $_POST[ 'cid' ];
	$uid = $_POST[ 'uid' ];
	$reply = $_POST[ 'reply' ];

	if( $DB->query( "INSERT INTO replies (cid, uid, message, reply_datetime ) VALUEs( $cid, $uid, '$reply', NOW() )" ) ) {

	}