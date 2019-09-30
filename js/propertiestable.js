var propertiesPromise = fetch('/api/properties');

propertiesPromise.then(function(response) {
    return response.json();
    }).then(function(json){
        var table = document.getElementById("allPropertiesTable");
        json.forEach(function(json) {
            var row = table.insertRow(1);

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
            cell5.innerHTML = '<a href="properties/show/'+json.id+'"><i class="fa fa-eye"></i>  Show</a><br><a href="properties/edit/'+json.id+'"><i class="fa fa-edit"></i> Edit</a><br><a href="properties/remove/'+json.id+'"><i class="fa fa-trash"></i> Remove</a>';
    });
});