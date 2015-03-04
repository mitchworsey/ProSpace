<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='root';
$dbname='prospace';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn)     
    die('Could not connect: ' . mysql_error());
if (!mysql_select_db($dbname))    
    die("Can't select database");

?>