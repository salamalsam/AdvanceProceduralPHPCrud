<?php

$server_name = 'localhost';
$username = 'root';
$password = '';
$database = 'crud_app';

$con_obj = new mysqli($server_name,$username,$password,$database);

if($con_obj->connect_errno):
	die('Connection Faild:'. $con_obj->connect_error);
endif;

echo 'Greetings 🙂';

?>