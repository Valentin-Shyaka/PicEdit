<?php
$sname='localhost';
$uname="root";
$password="";
$dbname="imagedb";

$conn= mysqli_connect($sname,$uname,$password,$dbname);

if(!$conn){
     echo "Connection failed";
     exit();


}


















?>