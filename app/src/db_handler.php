<?php
/**
 * Connect to MySQL database
 * 
 */
$server="db";
$dbUsername='root';
$dbpPassword="MYSQL_ROOT_PASSWORD";
$dbName="MYSQL_DATABASE";



$conn= mysqli_connect($server,$dbUsername,$dbpPassword,$dbName);


//Check if the connection is a success
if(!$conn)
{
    die("db Error, connection failed ". mysqli_connect_error());

}
?>
