<form method="post" id="formCreate">
    Adresse:
    <br>
        <textarea name="Ort" placeholder="Adresse der Immobilie..." style="width: 50%; height:200px;"></textarea>
    <br>
    Land:
    <br>
    <?php
        $country = new Country();
        $countries = $country->orderedCountries();
        echo '<select name="LandID">';
        foreach ($countries as $country){
            echo "<option value={$country['LandID']}>{$country['Landname']}</option>";
        }
        echo '</select>';
    ?>
    <br> 
    Baujahr:
    <br>
        <input type="number" name="Baujahr" placeholder="2019" style="width: 250px"><br>
    Preis:
    <br>
        <input type="number" name="Preis"  maxlength="12" placeholder="1000000" style="width: 250px">
    <br><br>
        <input type="submit" value='Absenden' style="width: 250px">   
        <input type="reset" value='Zurücksetzten' style="width: 250px" >
</form>