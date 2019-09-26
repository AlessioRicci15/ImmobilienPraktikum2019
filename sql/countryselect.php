<?php
    $country = new Country();
    $countries = $country->orderedCountries();
    echo '<select name="land">';
    foreach ($countries as $country){
        echo "<option value={$country['LandID']}>{$country['Landname']}</option>";
    }
    echo "</select>"
?>