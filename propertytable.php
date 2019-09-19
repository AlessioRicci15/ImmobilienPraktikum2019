<?php
    include("dbcon.php"); 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT `immobilien`.`id`, `immobilien`.`Ort`, `immobilien`.`Preis`, `immobilien`.`Baujahr`, `land`.`Landname`
    FROM `immobilien`
    LEFT JOIN `land` ON `immobilien`.`Land` = `land`.`LandID`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "
    <table border=1>
        <tr>
            <th class=p1>Adresse</th>
            <th class=p2>Land</th>
            <th class=p3>Baujahr</th>
            <th class=p4>Preis</th>
            <th class=p5>Aktion</th>
        </tr>";
    while($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td class=p1>
                <a href='Show.php?id={$row['id']}'>
                    {$row['Ort']}
                </a>
            </td>
        <td class=p2 class=lang>
            {$row['Landname']}
        </td>
        <td class=p3 class=lang>
            {$row['Baujahr']}
        </td>
        <td class=p4 class=lang>
            {$row['Preis']}
        </td>
        <td class=p5 class=lang>
            <a href=Show.php?id={$row['id']}> 
                <i class='fa fa-eye'></i> Show<br>
            </a>
            <a href=Edit.php?id={$row['id']}> 
                <i class='fa fa-edit'></i> Edit<br>
            </a>
            <a href=Remove.php?id={$row['id']}> 
                <i class='fa fa-trash'></i> Remove
            </a>
        </td>
    </tr>";
    }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
?>