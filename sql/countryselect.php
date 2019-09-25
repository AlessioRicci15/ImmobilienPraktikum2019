<?php
    $country = new Country();
    $country = $country->orderedCountries();
    echo '<select name="land">';
    foreach ($country as $countries){
        echo "<option value={$countries['Landname']}> </option>";
    }
    echo "</select>"
?>