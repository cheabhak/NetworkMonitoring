<html>
<head>
<title>Bandwidth Monitoring</title>
<b><h1>Bandwidth Monitoring</h1></b>
</head>
<body>
1. Add Device<br>
2. Create Graph<br><br>
<form action="device.php">
<input type="submit" name="add_new" value="Add Device"/>
</form>
<table align="center">
<td style="height: 100%;" width="20%">Hello</td>
<td>
<?php
$Hour="Hourly.png";
$Day="Daily.png";
$Week="Weekly.png";
$Year="Yearly.png";
			require ('graph.php');
			print "<h2>Hourly graph</h2>\n";
        	make_graph($Hour, "-3600"); 
        	echo "<img src=".$Hour." >";      	
        	print "<h2>Daily graph</h2>\n";
        	make_graph($Day, "-1d");
        	echo "<img src=".$Day." >";
        	print "<h2>Weekly graph</h2>\n";
        	make_graph($Week, "-7d");
        	echo "<img src=".$Week." >";
        	print "<h2>Yearly graph</h2>\n";
        	make_graph($Year, "-365d");
        	echo "<img src=".$Year." >";
        
?>
</td>
</table>
</body>
</html>
