<?php
$db['db_host']="localhost";
$db['db_uname']="root";
$db['db_pass']="";
$db['db_name']="cmscoba";
foreach($db as $key => $value){
	define(strtoupper($key),$value);
}
$connection = mysqli_connect(DB_HOST,DB_UNAME,DB_PASS,DB_NAME);
if($connection){
	echo "koneksi sukses";
}
?>