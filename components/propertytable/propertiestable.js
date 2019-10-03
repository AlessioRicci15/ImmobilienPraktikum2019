function addTableRow(node, entry ) {
/*
    var rowHTML = renderTemplate('template-property-table', entry);
    node.appendChild(rowHTML);
*/
    
    var row = node.insertRow(1);
    row.id = 'rowID'+entry.id;

    
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

    cell1.classList.add("lang");
    cell2.classList.add("lang");
    cell3.classList.add("lang");
    cell4.classList.add("lang");
    cell5.classList.add("lang");
    
    cell1.innerHTML = '<a href="properties/show/'+entry.id+'">' + entry.Ort + '</a>';
    cell2.innerHTML = entry.Landname; 
    cell3.innerHTML = entry.Baujahr;
    cell4.innerHTML = entry.Preis; 
    cell5.innerHTML = '<a href="properties/show/'+entry.id+'"><i class="fa fa-eye"></i>  Show</a><br><a href="properties/edit/'+entry.id+'"><i class="fa fa-edit"></i> Edit</a><br><a onclick="deleteProperty('+entry.id+')"><i class="fa fa-trash"></i> Remove</a>';
    
}

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

function renderTable(componentNode) {
    var propertiesPromise = fetch('/api/properties');
    propertiesPromise.then(function(response) {
        return response.json();
    })
    .then(function(propertyList){
        const tableNode = componentNode.querySelector('.allPropertiesTable');
        propertyList.forEach(function(propertyEntry) {
            addTableRow(tableNode, propertyEntry);
        });
    });
}

const propertyTableContext = document.querySelectorAll(".property-table");
    if (propertyTableContext) {
        propertyTableContext.forEach(componentNode => {
                renderTable(componentNode);
        });
    }