
<?php

function make_graph($output, $start) 
{ 
    	  $opts = array( 
    	  "--start", "$start",
    	  "--title=Traffic",
  		  "--width=650",
    	  "--height=220",
        "DEF:in=rrd/eth3.rrd:in:AVERAGE",
        "DEF:out=rrd/eth3.rrd:out:AVERAGE",
        "LINE2:in#00ff00:Download",
        "AREA:in#00FF00",
        "LINE2:out#ff0000:Upload",
    );
    $ret = rrd_graph($output, $opts);	 
   if (! $ret) 
    	echo "<b>Graph error: </b>".rrd_error()."\n";
}        
?>
