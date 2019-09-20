<form method="post" action="sendcreatpropertyformular">
    Adresse:
    <br>
        <textarea name="adresse" placeholder="Adresse der Immobilie..." style="width: 50%; height:200px;"></textarea>
    <br>
    Land:
    <br>
    <?php
        include("../sql/countryselect.php");
    ?>
    <br> 
    Baujahr:
    <br>
        <input type="text" name="baujahr" placeholder="2019" style="width: 250px"><br>
    Preis:
    <br>
        <input type="text" name="preis"  placeholder="1000000" style="width: 250px">
    <br><br>
        <input type="submit" value='Absenden' style="width: 250px">   
        <input type="reset" value='Zurücksetzten' style="width: 250px" >
</form>
