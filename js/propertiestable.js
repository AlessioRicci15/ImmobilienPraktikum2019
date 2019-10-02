//URL split
    var currentURL = window.location.href;
    var URL = currentURL.split("/");
    var view = URL[4];
    var idurl = URL[5];

if(!view){
    var propertiesPromise = fetch('/api/properties');
    propertiesPromise.then(function(response) {
        return response.json();
        }).then(function(json){
            var table = document.getElementById("allPropertiesTable");
            json.forEach(function(json) {
                var row = table.insertRow(1);
                row.id = 'rowID'+json.id;

                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);
                
                cell1.classList.add("p1");
                cell2.classList.add("p2");
                cell3.classList.add("p3");
                cell4.classList.add("p4");
                cell5.classList.add("p5");
                
                cell1.innerHTML = '<a href="properties/show/'+json.id+'">' + json.Ort + '</a>';
                cell2.innerHTML = json.Landname; 
                cell3.innerHTML = json.Baujahr;
                cell4.innerHTML = json.Preis; 
                cell5.innerHTML = '<a href="properties/show/'+json.id+'"><i class="fa fa-eye"></i>  Show</a><br><a href="properties/edit/'+json.id+'"><i class="fa fa-edit"></i> Edit</a><br><a onclick="deleteProperty('+json.id+')"><i class="fa fa-trash"></i> Remove</a>';
        });
    });
    function deleteProperty(id) {
            var deleteRowPromise = fetch('/api/properties/'+id, {
                method: 'DELETE'});
            deleteRowPromise.then(function(response) {
                return response.json();
            }).then(function(json){
                delete json;
            });   
            document.getElementById('rowID'+id).remove();      
        }
} else {
if(view=='show'){
    var showPromise = fetch('/api/properties/'+idurl);
    showPromise.then(function(response) {
    return response.json();
    }).then(function(json){
        var deteil = document.getElementById("deteil");
        var property = json;
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

        deteil.appendChild(h5Adresse);
        deteil.appendChild(pAdresse);
        deteil.appendChild(h5Preis);
        deteil.appendChild(pPreis);
        deteil.appendChild(h5Weiteres);
        deteil.appendChild(pWeiteresBaujahr);

        if(!property.lat){} else {
        var pWeiteresMaps = document.createElement("p");
        var divmaps = document.createElement("div");
        var map;
        var lat = property.lat;
        var lng = property.lng;
        
        divmaps.id = 'map';

        pWeiteresMaps.innerHTML = 'Google Maps:';
        divmaps.innerHTML = map;

        function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: lat, lng: lng},
            zoom: 15,
            mapTypeId: 'satellite'
        });
        }
        src='https://maps.googleapis.com/maps/api/js?key=AlzaSyAawYYD1cvdyZxm1ulFlvwwUuKgnA-G7A4&callback=initMap'
        };

        deteil.appendChild(pWeiteresMaps);
        deteil.appendChild(divmaps);
    })
} else {
if(view=='edit'){
    var showPromise = fetch('/api/properties/'+idurl);
    showPromise.then(function(response) {
    return response.json();
    }).then(function(json){
        
    })}}
};