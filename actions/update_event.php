<?php

$eid = $_POST[ 'eid' ];
$eventn = $_POST["name"];
$startd = $_POST["start_date"] . " " . $_POST["start_time"];
$endd = $_POST["end_date"] . " " . $_POST["end_time"];
$organizer = $_POST["organizer"];
$fee = $_POST["fee"];

$DB->query( "UPDATE events SET eventn = '$eventn', startd = '$startd', endd = '$endd', organizer = '$organizer', fee = '$fee' WHERE eid = $eid" );