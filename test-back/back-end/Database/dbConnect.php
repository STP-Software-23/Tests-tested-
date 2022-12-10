<?php

//Connect to db

$connectionParameters = [
    "host" => "localhost:3306",
    "username" => "stpeg123",
    "password" => "STePss@21/CP_BoArd&16Y",
    "dbName" => "stpeg123_stpeg23_workshops",
];
$connection = mysqli_connect($connectionParameters['host'],$connectionParameters['username'],$connectionParameters['password'],$connectionParameters['dbName']);

//Check connection
if(!$connection){
    
    echo 'Connection error' . mysqli_connect_error() ;
}

?>