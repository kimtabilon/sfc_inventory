<?php
//core
function dbcon(){
	$user = "root";
	$pass = "";
	$host = "localhost";
	$db = "ppes";
	$conn = mysqli_connect($host,$user,$pass);
	mysqli_select_db($conn,$db);
	return $conn;
}

function host(){
	$h = "http://".$_SERVER['HTTP_HOST']."/ppes/";
	return $h;
}

function hRoot(){
	$url = $_SERVER['DOCUMENT_ROOT']."/ppes/";
	return $url;
}

//parse string
function gstr(){
    $qstr = $_SERVER['QUERY_STRING'];
    parse_str($qstr,$dstr);
    return $dstr;
}

?>
