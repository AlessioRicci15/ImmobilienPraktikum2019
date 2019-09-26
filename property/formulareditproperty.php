<?php
    $property = new Property();
    $property = $property->getByID(
      $id
    );  
?>
<form method="post" action="../sendeditpropertyformular/<?php echo $property['id'] ?>">
    Adresse:
    <br>
        <input name="adresse" type="text"  value="<?php echo"{$property['Ort']}"?>" style="width: 50%; height:30px;">
    <br>
    Land:
    <br>
    <?php
        $country = new Country();
        $countries = $country->orderedCountries();
        echo '<select name="land">';
        foreach ($countries as $country){
            var_dump($property['LandID']);var_dump($country['LandID']);
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
        <input type="text" name="baujahr" value="<?php echo "{$property['Baujahr']}"?>"  style="width: 250px"><br>
    Preis:
    <br>
        <input type="text" name="preis"  value="<?php echo "{$property['Preis']}"?>"  style="width: 250px">
    <br><br>
        <button type="submit">Speichern</button>
</form>