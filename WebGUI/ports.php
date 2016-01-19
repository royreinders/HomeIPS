<?php
//This PHP code retrieves all the open ports that got detected from the log file and puts them in a table display
$portvalues;
$filename1 = 'Output/OpenPorts.txt';
$array1 = explode("\n", file_get_contents($filename1));
   foreach ( $array1 as $item1 ) {
if ($item1 != null)
{
$pieces = explode(" ", $item1);
        $portvalues = $portvalues . "<tr><td>" . $pieces[0] . "</td><td>" . $pieces[1] . "</td><td>" . "Yes" . "</td></tr>";
}
 
    }
//The HTML code below here is the table which will display the IP,port and whether or not it is safe.
?>
<div id="canvas-holder3" class="pull-left">
	<h2 class="sub-header">Open ports</h2>
        <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>IP</th>
                  <th>Port</th>
		  <th>Safe?</th>
                </tr>
              </thead>
              <tbody>
  		 <?php echo $portvalues; ?>
              </tbody>
            </table>
          </div>
	</div>

