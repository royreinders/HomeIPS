<?php
//This PHP code retrieves all the snort alerts that got detected from the log file and puts them in a table display.
//It also compares these value in a SQL database and see what kind of priority they have. All these priority counts get added to a pie chart in graphs.php
$snortvalues;
$highSnortTotal = 0;
$mediumSnortTotal = 0;
$lowSnortTotal = 0;
$filename1 = 'Output/alert';
//Checks the alert log and starts seperating important information based on special characters
$array1 = explode("\n", file_get_contents($filename1));
   foreach ( $array1 as $item1 ) {
	if (strpos($item1,'[**]') !== false) {	
	$idArray1 = explode(" ", $item1);
	$idArray2 = explode(":", $item1);
	$item1 = str_replace(str_split('*[]:1234567890'), '', $item1);
        $snortvalues = $snortvalues . "<tr><td>" .  $item1;
	//Removes all unneeded whitespace so it can properly do a SELECT * from the database
	$item1 = trim($item1);
	// Checks the database for the alert defination
	$stmt = $conn->prepare(" SELECT * FROM AlertDefinitions WHERE alertID='" . $idArray2[1] . "'"); 
	$stmt->execute(); 
	$row = $stmt->fetch();
	//Checks what priority it is, and adds it to the counter
	if ($row['priority'] == 0)
	{
		$lowSnortTotal = $lowSnortTotal + 1;
	}
	elseif ($row['priority'] == 1)
	{
		$mediumSnortTotal = $mediumSnortTotal + 1;
	}
	elseif ($row['priority'] == 2)
	{
		$highSnortTotal = $highSnortTotal + 1;
	}
        
	}

	if (strpos($item1,'->') !== false) {
	$pieces = explode(" ", $item1);
	$timepieces = explode(".", $pieces[0]);
	// Puts the alert in a nicer format so it can be readed more properly on the webinterface
        $snortvalues = $snortvalues . "</td><td>" . $timepieces[0] . "</td><td>" . $pieces[1] . "</td><td>" . $pieces[3]. "</td><td>" . '<a href="#" data-toggle="tooltip" title="' . $row['definition'] . '">?</a>' . "</td></tr>";

	}
    }
?>


