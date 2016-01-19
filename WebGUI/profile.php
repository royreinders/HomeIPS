<?php
$dir = 'Output/Profiles';
$profiletext = 'snort';
//preg_grep has been added to prevent scandir from adding hidden files.
$profiles = preg_grep('/^([^.])/', scandir($dir));
$profilevaluecount = 0;
foreach ($profiles as $profilevalue) {
	//Removes any files with ~ characters in them
	if (strpos($profilevalue,'~') === false) {
		//Constructs an options list for the profile selection box with the array full of profile names
		$profilevaluecount = $profilevalue;
		$profileOptions = $profileOptions . '<option value="' . $profilevaluecount . '">' . $profilevalue . '</option>'; 
	}
    }

//Activates after the enable button has been clicked on the webinterface
if($_GET){
    if(isset($_GET['enable'])){
	  
	$profiletext = $_GET['profilebox']; //Retrieves the value from the selection box
        enable($profiletext);
    }
}
    // Clears the folder
    function clear($profiletext)
    {
	array_map ('unlink', glob("Output/CurrentProfile/*")); 
    }
    // Enables a new profile that is selected
    function enable($profiletext)
    {  
     	$fileProfileDir = "Output/Profiles/" . $profiletext . "/profile.txt";
    if (file_exists($fileProfileDir)) {
	clear($profiletext); 
	copy($fileProfileDir, 'Output/CurrentProfile/profile.txt');
	 $message=shell_exec("Scripts/snortreboot.sh 2>&1");
      	print_r($message);
     } else {
        // code when file not found
     }  
    }
?>


