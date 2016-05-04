<?php
$link=mysqli_connect('localhost', 'asad', 'asad');
if (!$link)
{
die('Cold not connect'. mysqli_error());
}
$selectDB = mysqli_select_db($link, 'cm2');
if (!$selectDB)
{
	die ('cannot select database'.mysqli_error($link));
}

/*
$conn = mysqli_connect("localhost", "asad" , "asad");
mysqli_select_db($conn, "cm");
$link = mysqli_connect("localhost", "asad", "asad", "cm");
*/

function execute_select_query($query){
	global $link;
	$result = mysqli_query($link, $query);
	$rows=mysqli_fetch_array($result);
	return $rows;
}

function import_query($query2){
	global $link;
	$rows2 = mysqli_multi_query($link, $query2);
	return $rows2;
}

function show_query($query3){
	global $link;
	$result = mysqli_query($link, $query3);
	$rows3 = mysqli_fetch_array($result);
	return $rows3;
}





?>