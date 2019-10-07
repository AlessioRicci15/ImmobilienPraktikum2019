function addTableRow(node, entry ) {

    var rowHTML = renderTemplate('template-property-table', entry);
    node.insertAdjacentHTML('beforeend', rowHTML);
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