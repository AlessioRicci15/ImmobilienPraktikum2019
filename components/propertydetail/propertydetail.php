<article class="small">

<div class="propertydetail">
  <div class="propertydetail_info"></div>
  <div class="propertydetail_map hidden">
    <p>Google Maps:</p>
    <div id="map"></div>
  </div>
</div>

<?php
/*
      <h5>Adresse</h5>
      <?php
      $property = new Property();
      $property = $property->getByID(
        $id
      );   
      echo "
      {$property['Ort']} in {$property['Landname']}
      <br><hr><br>
      <h5>Preis</h5>
        CHF {$property['Preis']}
      <h5>Weiteres</h5>
        Baujahr: {$property['Baujahr']}<br>
    "?>
    echo("GoogleMaps:<br><br>");?>
    <div id="map" style="height: 350px;width: 75%;"></div>
      <script>
        var map;
        var lat = <?php echo "{$property['lat']}"?>;
        var lng = <?php echo "{$property['lng']}"?>;
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: lat, lng: lng},
            zoom: 15,
            mapTypeId: 'satellite'
          });
        }
      </script>
      <script 
        src="https://maps.googleapis.com/maps/api/js?key=AlzaSyAawYYD1cvdyZxm1ulFlvwwUuKgnA-G7A4&callback=initMap" async defer>
      </script>
    <?php } 
*/
?>
</article>