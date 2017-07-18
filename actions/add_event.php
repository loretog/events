<?php

	$name = $_POST[ 'name' ];
	$start_date = $_POST[ 'start_date' ] . " " . $_POST[ 'start_time' ];
	$end_date = $_POST[ 'end_date' ] . " " . $_POST[ 'end_time' ];
	$organizer = $_POST[ 'organizer' ];
	$fee = $_POST[ 'fee' ];

	$test = $DB->query( "SELECT * FROM events WHERE eventn = '$name'" );

	if( $test->num_rows > 1 ) {
		$_SESSION[ 'MESSAGE' ] = "Event already exists!";
	} else {
		$DB->query( "INSERT INTO events ( eventn, startd, endd, organizer, fee ) VALUES( '$name', '$start_date', '$end_date', '$organizer', '$fee' )" );
	}	