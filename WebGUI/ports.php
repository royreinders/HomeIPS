<?php
$portvalues;
$filename1 = 'Output/OpenPorts.txt';
$array1 = explode("\n", file_get_contents($filename1));
   foreach ( $array1 as $item1 ) {
if ($item1 != null)
{
$pieces = explode(" ", $item1);
        $portvalues = $portvalues . "<tr><td>" . $pieces[0] . "</td><td>" . $pieces[1] . "</td><td>" . "Ja" . "</td></tr>";
}
 
    }
?>
<div id="canvas-holder3" class="pull-left">
	<h2 class="sub-header">Open poorten</h2>
        <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>IP</th>
                  <th>Poort</th>
		  <th>Veilig?</th>
                </tr>
              </thead>
              <tbody>
  		 <?php echo $portvalues; ?>
              </tbody>
            </table>
          </div>
	</div>

