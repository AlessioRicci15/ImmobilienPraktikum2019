<?php
    include("databaseconnaction.php");
    $sql = "SELECT `immobilien`.`id`, `immobilien`.`Ort`, `immobilien`.`Preis`, `immobilien`.`Baujahr`, `land`.`Landname`, `immobilien`.`lat`, `immobilien`.`lng`
            FROM `immobilien` 
            LEFT JOIN `land` ON `immobilien`.`Land` = `land`.`LandID`
            WHERE immobilien.id =" . intval($_GET['id']);
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $Baujahr = $row['Baujahr'];
    $Preis = $row['Preis'];
    $Ort = $row['Ort'];
    $Land = $row['Landname'];
?>

<form method="post" action="sendeditpropertyformular.php">
        <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">
    Adresse:
    <br>
        <input name="adresse" type="text"  value="<?php echo $Ort;?>" style="width: 50%; height:30px;">
    <br>
    Land:
    <br>

    <?php
        include("databaseconnaction.php");
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
        <input type="text" name="baujahr" value="<?php echo $Baujahr;?>"  style="width: 250px"><br>
    Preis:
    <br>
        <input type="text" name="preis"  value="<?php echo $Preis;?>"  style="width: 250px">
    <br><br>
        <button type="submit">Speichern</button>
</form>

