<script>
//Displays a popup after the User manual button has been clicked
function funcGuidePopup() {
    var x;
    if (confirm("You can find more info on our wiki at https://github.com/royreinders/HomeIPS/wiki") == true) {        
	x = "You pressed OK!";		
    } else {
        x = "You pressed Cancel!";
    }
    document.getElementById("popupGuide").innerHTML = x;
}
</script>
