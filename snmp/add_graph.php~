<?php
echo $_POST['interfaces'];
echo "<br>";
echo $_POST['community'];
echo "<br>";
echo $_POST['host'];
echo "<br>";
$interface = $_POST['interfaces'];
$community = $_POST['community'];
$ip = $_POST['host'];
$name = $_POST['device'];


/////////////////////connect database/////////////////
$servername = "localhost";
$username = "root";
$pass="cheabhak!@#";
$mysql_id = mysql_connect($servername, $username, $pass);
if(!$mysql_id) {
echo "error";	
	}
else {
	echo "Success";
}
mysql_select_db('traffic', $mysql_id);

/////////////////////////////Add interface to SQL/////////////////////////////////////////
$sql = "INSERT INTO device (name, ip, community, interface) VALUES ('$name', '$ip', '$community', '$interface')";
$mysqlq=mysql_query($sql, $mysql_id);
if(!$mysqlq){
echo "Error";	
}
else {
	echo "Success";
}

$rrdname = "Traffic".$name.".".$interface."";
$fname="rrd/".$rrdname.".rrd";
rrd_create($fname, array(
	'--step', '30',
	//'--start', '1351773830',
	'DS:in:COUNTER:300:0:U',
	'DS:out:COUNTER:300:0:U',
	'RRA:AVERAGE:0.5:1:24',
));
echo $rrdname; 
?>
