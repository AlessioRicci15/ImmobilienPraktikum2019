<?php
    $property = new Property();
    $property = $property->getByID(
      $id
    );  
?>
<form method="post" id="formEdit">
    Adresse:
    <br>
        <input name="Ort" type="text"  value="<?php echo"{$property['Ort']}"?>" style="width: 50%; height:30px;">
    <br>
    Land:
    <br>
    <?php
        $country = new Country();
        $countries = $country->orderedCountries();
        echo '<select name="LandID">';
        foreach ($countries as $country){
            if($property['LandID'] == $country['LandID']){
                echo "<option selected value={$country['LandID']}>{$country['Landname']}</option>";
            }else{
                echo "<option value={$country['LandID']}>{$country['Landname']}</option>";
            } 
        }
        echo '</select>';
    ?>
        <br> 
    Baujahr:
    <br>
        <input type="number" name="Baujahr" value="<?php echo "{$property['Baujahr']}"?>"  style="width: 250px"><br>
    Preis:
    <br>
        <input type="number" name="Preis"  value="<?php echo "{$property['Preis']}"?>"  style="width: 250px">
    <br><br>
        <input type="submit" value='Speichern' style="width: 250px">   
</form>