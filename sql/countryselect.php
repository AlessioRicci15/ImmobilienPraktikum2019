<?php
                    $sql = "SELECT `land`.`LandID`, `land`.`Landname`
                            FROM `land`
                            ORDER BY Landname ASC";
                    $result = $conn->query($sql);
                    echo '<select name="land">';
                    while ($row = $result->fetch_assoc()){
                        echo '<option value="'.$row['LandID'].'">'.$row['Landname'].'</option>';
                    }
                    echo '</select>'
?>