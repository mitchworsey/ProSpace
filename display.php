<!DOCTYPE html>
<head></head>
<body>

<?php

include 'connect.php';

$table='talentaccountinfo';

$result = mysql_query("SELECT * FROM {$table}");

if (!$result)  
    die("Query to show fields from table failed!" . mysql_error());

$fields_num = mysql_num_fields($result);
echo "<h1>Table: ".$table."</h1>";
echo "<table border='1'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++) {	
	$field = mysql_fetch_field($result);	
	echo "<td><b>".$field->name."</b></td>";
}
echo "</tr>\n";
while($row = mysql_fetch_row($result)) {	
	echo "<tr>";	
	// $row is array... foreach( .. ) puts every element
	// of $row to $cell variable	
	foreach($row as $cell)		
		echo "<td>".$cell."</td>";	
	echo "</tr>\n";
}
mysql_free_result($result);

mysql_close($conn);
?>

<button><a class="back" href="CS351FinalProjectLogIn.html">Back</a></button>

</body>
