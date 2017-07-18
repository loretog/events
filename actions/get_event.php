<?php

	$eid = $_GET[ 'eid' ];

	$event = $DB->query( "SELECT * FROM events WHERE eid = $eid" );
	$a = array();
	while( $rec = $event->fetch_object() ) {
		$a[ 'eid' ] = $rec->eid;
		$a[ 'eventn' ] = $rec->eventn;
		$a[ 'startd' ] = date( "Y-m-d", strtotime( $rec->startd ) );
		$a[ 'endd' ] = date( "Y-m-d", strtotime( $rec->endd ) );
		$a[ 'startt' ] = date( "H:i", strtotime( $rec->startd ) );
		$a[ 'endt' ] = date( "H:i", strtotime( $rec->endd ) );		
		$a[ 'organizer' ] = $rec->organizer;
		$a[ 'fee' ] = $rec->fee;
	}
	echo json_encode( $a );
	exit;