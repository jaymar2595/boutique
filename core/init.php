<?php 

$db = mysqli_connect('127.0.0.1', 'root', '', 'boutique');

if(mysqli_connect_errno($db)) {
	echo 'Database connection failed with following errors: ' . mysqli_connect_error();
	die();
}

require_once('../config.php');
require_once(BASEURL . 'helpers/helpers.php');


?>