<?php
$snortvalues;
$filename1 = 'Output/alert';
$array1 = explode("\n", file_get_contents($filename1));
   foreach ( $array1 as $item1 ) {
if (strpos($item1,'[**]') !== false) {
	$item1 = str_replace(str_split('*![]:10'), '', $item1);
        $snortvalues = $snortvalues . "<tr><td>" . $item1;
}
 if (strpos($item1,'->') !== false) {
$pieces = explode(" ", $item1);
$timepieces = explode(".", $pieces[0]);
        $snortvalues = $snortvalues . "</td><td>" . $timepieces[0] . "</td><td>" . $pieces[1] . "</td><td>" . $pieces[3]. "</td></tr>";
}
    }
?>
<div id="canvas-holder3" class="pull-left">
	<h2 class="sub-header">Alerts</h2>
        <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Alert</th>
		  <th>Tijd</th>
	          <th>Source</th>
	   	  <th>Destination</th>
                </tr>
              </thead>
              <tbody>
  		 <?php echo $snortvalues; ?>
              </tbody>
            </table>
          </div>
	</div>

