<html>

<legend>Interface List</legend>
<form action="add_graph.php" method="post">

<select name="interfaces" size="5" style="width:30%" required="Pleae Select Interface:">
<?php
snmp_set_valueretrieval (SNMP_VALUE_PLAIN);
$host = $_POST["ip"];
$community = $_POST["community"];
$interface = snmp2_walk($host, $community, "ifName");
$index = 1;
foreach( $interface as $value )
{
    echo '<option value="' . $index . '">' . $value . '</option>';
    $index=$index+1;
}
?>
</select><br><br>
<?php
echo "<input type='text' name=dname value='$dname'/>";
echo "<input type='text' name=host value='$host'/>";
echo "<input type='text' name=community value='$community'/>";



?> 

<input type='submit' name='add_graph' value='Make Graph'/>

</form>
</html>