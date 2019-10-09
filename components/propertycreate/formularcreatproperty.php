<form method="post" id="formCreate">
    Adresse:
    <br>
        <textarea id="formadressecreat" name="adresse" placeholder="Adresse der Immobilie..." style="width: 50%; height:200px;"></textarea>
    <br>
    Land:
    <br>
    <?php
        $country = new Country();
        $countries = $country->orderedCountries();
        echo '<select id="formlandcreat" name="land">';
        foreach ($countries as $country){
            echo "<option value={$country['LandID']}>{$country['Landname']}</option>";
        }
        echo '</select>';
    ?>
    <br> 
    Baujahr:
    <br>
        <input id="formbaujahrcreat" type="text" name="baujahr" placeholder="2019" style="width: 250px"><br>
    Preis:
    <br>
        <input id="formpreiscreat" type="text" name="preis"  maxlength="12" placeholder="1000000" style="width: 250px">
    <br><br>
        <input type="submit" value='Absenden' style="width: 250px">   
        <input type="reset" value='Zurücksetzten' style="width: 250px" >
</form>