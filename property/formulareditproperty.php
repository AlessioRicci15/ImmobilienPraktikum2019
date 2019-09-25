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
        $sql = "SELECT `land`.`LandID`, `land`.`Landname`
                FROM `land`
                ORDER BY Landname ASC";
        $result = $conn->query($sql);
        echo '<select name="land">';
        while ($row = $result->fetch_assoc()){
            if($Land==$row['Landname']){
                echo '<option selected value="'.$row['Landname'].'">'.$row['Landname'].'</option>';
            }else{
                echo '<option value="'.$row['Landname'].'">'.$row['Landname'].'</option>';
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