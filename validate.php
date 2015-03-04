<!DOCTYPE html>
<html>
<head><title>TITLE</title></head>
<body>
    
<?php
include 'connect.php';

$table='talentaccountinfo';

$email = $_POST["uEmail"] ;
$pass = $_POST["uPass"] ;

if(strlen($email) < 1)
    die("Please type your Email");
elseif(!preg_match(/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/))
    die("You have entered an invalid email");
elseif(strlen($pass) < 1)
    die("Please type your Password");

$sql = "SELECT FirstName FROM $table WHERE Email='$email' AND Password='$pass'";
$f1 = mysql_query($sql);

if(!$f1)
   echo "This user does not exist.  " . mysql_error();
else
    echo "Welcome ".$sql."!";

include 'display.php';


mysql_close($conn);

?>
</body>
</html>
