<?php

$eid = $_GET[ 'eid' ];
$DB->query( "DELETE FROM events WHERE eid = $eid" );

header( "Location: " . SITE_URL . "/?page=events" );