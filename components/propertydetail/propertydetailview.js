var currentURL = window.location.href;
var URL = currentURL.split("/");
var idurl = URL[5];

var lat = ; //not working
var lng = ;

function renderDetail(property, propertyDetailContext){
    var h5Adresse = document.createElement("h5");
    var pAdresse = document.createElement("p");
    var h5Preis = document.createElement("h5");
    var pPreis = document.createElement("p");
    var h5Weiteres = document.createElement("h5");
    var pWeiteresBaujahr = document.createElement("p");

    h5Adresse.innerHTML = 'Adresse:';
    pAdresse.innerHTML = property.Ort + ' in ' + property.Landname + '<hr>';
    h5Preis.innerHTML = 'Preis:';
    pPreis.innerHTML = 'CHF ' + property.Preis;
    h5Weiteres.innerHTML = 'Weiteres:';
    pWeiteresBaujahr.innerHTML = 'Baujahr: ' + property.Baujahr;

    propertyDetailContext.appendChild(h5Adresse);
    propertyDetailContext.appendChild(pAdresse);
    propertyDetailContext.appendChild(h5Preis);
    propertyDetailContext.appendChild(pPreis);
    propertyDetailContext.appendChild(h5Weiteres);
    propertyDetailContext.appendChild(pWeiteresBaujahr);

    if (property.lat) {
        const mapcontainer = document.querySelector('.google-maps');
        mapcontainer.classList.remove('hidden');
    };
}

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: lat, lng: lng},
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

const propertyDetailContext = document.querySelector(".detail");
    if (propertyDetailContext) {
        getInformations(propertyDetailContext);
    }   























/*
    if(view=='edit'){
        var showPromise = fetch('/api/properties/'+idurl);
        showPromise.then(function(response) {
        return response.json();
        }).then(function(json){
            
        })}}
    };
*/