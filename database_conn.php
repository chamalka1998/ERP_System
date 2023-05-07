<?php

$severname ="localhost";
$dbUsername= "root";
$dbPassword="";
$databaseName="tech_haven_db";

//Create DB Connection

$database_connection=new mysqli ($severname,$dbUsername,$dbPassword,$databaseName);

//Verify DB connection

if($database_connection->connect_error){
    
    die("Database connection failed".$database_connection->connect_error);
   

}else{
    
    
}

?>