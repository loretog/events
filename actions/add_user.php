<?php

$firstn = $_POST['firstn'];
$lastn = $_POST['lastn'];
$usern = $_POST['usern'];
$pwd = md5($_POST['pwd']);
$mobile = $_POST['mobile'];
$yrsec = $_POST['yrsec'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$stutype = $_POST['stutype'];
$memtype = $_POST['memtype'];

	
$sql = "INSERT INTO users (firstn, lastn, usern, pwd, mobile, yrsec, email, gender, stutype, memtype)
VALUES ('$firstn','$lastn','$usern','$pwd','$mobile','$yrsec','$email','$gender','$stutype','$memtype')";
$DB->query($sql);

header( "Location: " . SITE_URL );