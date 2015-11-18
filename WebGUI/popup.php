<script>
function funcLokaalBeheerPopup() {
    var x;
    if (confirm("Hier kunt u uw instellingen veranderen. Klik op OK als u de nieuwe instellingen wilt opslaan.") == true) {
        x = "You pressed OK!";
    } else {
        x = "You pressed Cancel!";
    }
    document.getElementById("popupLokaalBeheer").innerHTML = x;
}
function funcHandleidingPopup() {
    var x;
    if (confirm("De handleiding kunt u vinden op www.security-home.nl") == true) {
        x = "You pressed OK!";
    } else {
        x = "You pressed Cancel!";
    }
    document.getElementById("popupHandleiding").innerHTML = x;
}
function funcContactPopup() {
     var email = prompt("U stuurt hiermee een email naar ons bedrijf als u ergens hulp bij nodig hebt.", "Beschrijving van probleem");
    if (email != null) {
//TODO
    }
}
</script>
