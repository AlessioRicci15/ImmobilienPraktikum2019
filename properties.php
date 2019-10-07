<article>
    <h4>Immobilien  <a href="properties/create"><button type="button">Erfasse eine Immobilie</button></a></h4>
    <?php
    $url = $_SERVER['REQUEST_URI']; 
    
    $adresse   = 'Adresse';
    $landname   = 'Landname';
    $baujahr   = 'Baujahr';
    $preis   = 'Preis';

    $adr = strpos($url, $adresse);
    $lan = strpos($url, $landname);
    $bau = strpos($url, $baujahr);
    $pre = strpos($url, $preis);


    if(!$adr===false){
        //befehl was tun wenn adresse
        include("components/propertytable/propertytable.php");
    } else if(!$lan===false){
        //befehl was tun wenn landname
        include("components/propertytable/propertytable.php");
    } else if(!$bau===false){
        //befehl was tun wenn baujahr
        include("components/propertytable/propertytable.php");
    } else if(!$pre===false){
        //befehl was tun wenn preis
        include("components/propertytable/propertytable.php");
    } else{
        include("components/propertytable/propertytable.php");
    }   
    ?>       
</article>