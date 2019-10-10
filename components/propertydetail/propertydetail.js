var currentURL = window.location.href;
var URL = currentURL.split("/");
var idurl = URL[5];

function renderDetail(property, propertyDetailContext){

    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'CHF'
      })
    var value = property.Preis;
    var newValue = formatter.format(value);

    var h5Adresse = document.createElement("h5");
    var pAdresse = document.createElement("p");
    var h5Preis = document.createElement("h5");
    var pPreis = document.createElement("p");
    var h5Weiteres = document.createElement("h5");
    var pWeiteresBaujahr = document.createElement("p");

    h5Adresse.innerHTML = 'Adresse:';
    pAdresse.innerHTML = property.Ort + ' in ' + property.Landname + '<hr>';
    h5Preis.innerHTML = 'Preis:';
    pPreis.innerHTML = newValue;
    h5Weiteres.innerHTML = 'Weiteres:';
    pWeiteresBaujahr.innerHTML = 'Baujahr: ' + property.Baujahr;

    propertyDetailContext.appendChild(h5Adresse);
    propertyDetailContext.appendChild(pAdresse);
    propertyDetailContext.appendChild(h5Preis);
    propertyDetailContext.appendChild(pPreis);
    propertyDetailContext.appendChild(h5Weiteres);
    propertyDetailContext.appendChild(pWeiteresBaujahr);

    if (property.lat) {
        const mapcontainer = document.querySelector('.propertydetail_map');
        mapcontainer.classList.remove('hidden');
        document.querySelector(".propertydetail_map").setAttribute("data-lat", property.lat); 
        document.querySelector(".propertydetail_map").setAttribute("data-lng", property.lng);
        
        loadGoogleMapsApi();
    };
}

function loadGoogleMapsApi() {
    let script = document.createElement("script");
    script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAssHWGVrFbQD1XsN-DcR-8FV_zupuROI4&callback=initMap";
    script.type = "text/javascript";
    document.getElementsByTagName("head")[0].appendChild(script);
}

function initMap() {
    map = new google.maps.Map(document.querySelector('#map'), {
        center: {lat: parseFloat(document.querySelector(".propertydetail_map").getAttribute("data-lat")),
                 lng: parseFloat(document.querySelector(".propertydetail_map").getAttribute("data-lng"))},
        zoom: 15,
        mapTypeId: 'satellite'
    });
}

function getInformations(propertyDetailContext) {
    var showPromise = fetch('/api/properties/'+idurl);
    showPromise.then(function(response) {
        return response.json();
    })
    .then(function(property){
        renderDetail(property, propertyDetailContext);
    });
}

const propertyDetailContext = document.querySelector(".propertydetail_info");
if (propertyDetailContext) {
    getInformations(propertyDetailContext);
}