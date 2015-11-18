<?php
$networkSafeTotal = 3;
$networkNotSafeTotal = 0;
$pie1value1text;
$pie2value2text;
$pie1value1 = 0;
$pie1value2 = 0;
$filename1 = 'Output/Defaultinterface.txt';
$filename2 = 'Output/Webservers.txt';
//Gets all the weak passwords detected
$array1 = explode("\n", file_get_contents($filename1));
   foreach ( $array1 as $item1 ) {
	if ($item1 != null)
	{
	$pie1value1text = $pie1value1text . $item1;
        $pie1value1 = $pie1value1 + 1;
	}
    }
//Gets total of all devices that has their password detected
$array2 = explode("\n", file_get_contents($filename2));
   foreach ( $array2 as $item2 ) {
	if ($item2 != null)
	{
        $pie1value2 = $pie1value2 + 1;
	}
    }
 $pie1value2 =  $pie1value2 - $pie1value1;
//Checks total network safety
if ($pie1value1 != 0)
	{
		$networkNotSafeTotal = $networkNotSafeTotal + 1;
		$networkSafeTotal = $networkSafeTotal - 1;
	}
?>
<script>

		var pieData = [
				{
					value: "<?php echo $pie1value1; ?>",
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Zwak wachtwoord"
				},
				{
					value: "<?php echo $pie1value2; ?>",
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Goed wachtwoord"
				}
			];
		var pieData2 = [
				{
					value: "<?php echo $networkSafeTotal; ?>",
					color:"#33CC00",
					highlight: "#33CC33",
					label: "Netwerk in orde"
				},
				{
					value: "<?php echo $networkNotSafeTotal; ?>",
					color: "#CC6600",
					highlight: "#CC6633",
					label: "Netwerk niet in orde"
				}
			];
		
 	$(document).ready( 
                function () {
			 var ctx = document.getElementById("chart-area").getContext("2d");
                         var myPie = new Chart(ctx).Pie(pieData);
			 var ctx2 = document.getElementById("chart-area2").getContext("2d");
			 var myPie2 = new Chart(ctx2).Pie(pieData2);
                    
        $("#chart-area").click( 
                        function(evt){
                            var activePoints = myPie.getSegmentsAtEvent(evt);

                            $.get("Output/Defaultinterface.txt", function(response) {
    				 var url = "De volgende IP adressen hebben een zwak wachtwoord: \n";	
				 url += response;  
				  alert(url);
				});
                          
                       		     }
                   	      );     
 	$("#chart-area2").click( 
                        function(evt){
                            var activePoints = myPie2.getSegmentsAtEvent(evt);
                            var url = "De volgende zaken zijn niet in orde op dit netwerk: \n";
                            alert(url);
                       		     }
                  		);          
                }
            );
	</script>
