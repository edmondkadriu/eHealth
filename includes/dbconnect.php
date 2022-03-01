<?php

$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"webi");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
/*
try{
	$conn = new PDO("mysql:host=localhost;dbname=webi", "root", "");

} catch(PDOException $conn){
	die("Lidhja deshtoi");

}*/

 ?>

