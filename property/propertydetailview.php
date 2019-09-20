<article class="small">
<h5>Adresse</h5>
<?php
    include("../sql/databaseconnaction.php");
    include("../sql/urlsplit.php");  
    $sql = "SELECT `immobilien`.`id`, `immobilien`.`Ort`, `immobilien`.`Preis`, `immobilien`.`Baujahr`, `land`.`Landname`, `immobilien`.`lat`, `immobilien`.`lng`
            FROM `immobilien` 
            LEFT JOIN `land` ON `immobilien`.`Land` = `land`.`LandID`
            WHERE immobilien.id =" . $id;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "
    {$row['Ort']} in {$row['Landname']}
    <br><hr><br>
    <h5>Preis</h5>
      CHF {$row['Preis']}
    <h5>Weiteres</h5>
      Baujahr: {$row['Baujahr']}<br>
      GoogleMaps:<br><br>
"?>
<div id="map" style="height: 350px;width: 75%;"></div>
    <script>
      var map;
      var lat = <?php echo "{$row['lat']}"?>;
      var lng = <?php echo "{$row['lng']}"?>;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: lat, lng: lng},
          zoom: 15,
          mapTypeId: 'satellite'
        });
      }
    </script>
    <script 
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAawYYD1cvdyZxm1ulFlvwwUuKgnA-G7A4&callback=initMap" async defer>
    </script>
</article>