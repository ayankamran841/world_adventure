<?php
$server_name ="localhost";
$username ="root";
$password = "";
$database_name ="world_adventure";

$connt = mysqli_connect($server_name,$username,$password,$database_name);

if($connt){

// echo "<h1> Database connected successfully</h1>";

}else{
echo "<h2>something wrong the code </h2>";

}
