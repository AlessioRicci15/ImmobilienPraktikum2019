function addTableRow(node, entry ) {
    var rowHTML = renderTemplate('template-property-table', entry);
    node.insertAdjacentHTML('beforeend', rowHTML);
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'CHF'
      })
    var id = entry.id;
    var value = document.getElementById("currency"+id).innerHTML;
    var newValue = formatter.format(value);
    document.getElementById("currency"+id).innerHTML = newValue;
    let noBaujahr = document.getElementById("noBaujahr"+id).innerHTML;
    if(noBaujahr === '0'){
        document.getElementById("noBaujahr"+id).innerHTML = '';
    }
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
var statusOrderAdresse = true;  
var statusOrderLand = true;  
var statusOrderBaujahr = true;  
var statusOrderPreis = true;  
function sortTable(orderby, direction, attributarrow) {
    var element;
    element = document.getElementById("iconArrowAdresse");
    element.classList.remove("up", "down");
    element = document.getElementById("iconArrowLand");
    element.classList.remove("up", "down");
    element = document.getElementById("iconArrowBaujahr");
    element.classList.remove("up", "down");
    element = document.getElementById("iconArrowPreis");
    element.classList.remove("up", "down");
    switch (attributarrow){
        case 'Adresse':
        if(statusOrderAdresse === false){
            element = document.getElementById("iconArrowAdresse");
            element.classList.add("down");
            statusOrderAdresse = true;  
            direction = 'DESC';
        } else {
            element = document.getElementById("iconArrowAdresse");
            element.classList.add("up");
            statusOrderAdresse = false;
        }
        break;
        case 'Land':
        if(statusOrderLand === false){
            element = document.getElementById("iconArrowLand");
            element.classList.add("down");
            statusOrderLand = true;   
            direction = 'DESC';
        } else {
            element = document.getElementById("iconArrowLand");
            element.classList.add("up");
            statusOrderLand = false;
        }
        break;
        case 'Baujahr':
        if(statusOrderBaujahr === false){
            element = document.getElementById("iconArrowBaujahr");
            element.classList.add("down");
            statusOrderBaujahr = true;   
            direction = 'ASC';
        } else {
            element = document.getElementById("iconArrowBaujahr");
            element.classList.add("up");
            statusOrderBaujahr = false;
        }
        break;
        case 'Preis':
        if(statusOrderPreis === false){
            element = document.getElementById("iconArrowPreis");
            element.classList.add("down");
            statusOrderPreis = true;   
            direction = 'ASC';
        } else {
            element = document.getElementById("iconArrowPreis");
            element.classList.add("up");
            statusOrderPreis = false;
        }
        break;
    }
    var propertiesPromise = fetch('/api/properties?orderby='+orderby+'&orderdirection='+direction);
    propertiesPromise.then(function(response) {
        return response.json();
    })
    .then(function(response){
        document.getElementsByTagName('tbody')[0].innerHTML = "";
        componentNode = document.querySelector(".property-table");
        const tableNode = componentNode.querySelector('.allPropertiesTableBody');
        response.forEach(function(propertyEntry) {
            addTableRow(tableNode, propertyEntry);
        });

    });
}
function renderTable(componentNode) {
    var propertiesPromise = fetch('/api/properties');
    propertiesPromise.then(function(response) {
        return response.json();
    })
    .then(function(propertyList){
        const tableNode = componentNode.querySelector('.allPropertiesTableBody');
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
function searchAdresse(){
    let inputTag = document.querySelector('#serchinputadresse');
    let input = inputTag.value;
    let adresseColumnTags = document.querySelectorAll('#adresseColumn');
    let adresseColumn;
    let matchingTag;
    let rowAdresses = document.querySelector('.allPropertiesTableBody').getElementsByTagName('tr');
    let rowSelect = 0;
    adresseColumnTags.forEach(function (adresseColumnTag){
        rowAdresses[rowSelect].classList.remove('hidden');
        adresseColumn = adresseColumnTag.innerText;
        adresseColumn = adresseColumn.toUpperCase();
        input = input.toUpperCase();
        matchingTag = adresseColumn.search(input);
        if(matchingTag === -1){
            rowAdresses[rowSelect].classList.add('hidden');  
        }
        rowSelect += 1;
    });
}
function searchCountry(){
    let inputTag = document.querySelector('#serchinputcountry');
    let input = inputTag.value;
    let adresseColumnTags = document.querySelectorAll('#countryColumn');
    let adresseColumn;
    let matchingTag;
    let rowAdresses = document.querySelector('.allPropertiesTableBody').getElementsByTagName('tr');
    let rowSelect = 0;
    adresseColumnTags.forEach(function (adresseColumnTag){
        rowAdresses[rowSelect].classList.remove('hidden');
        adresseColumn = adresseColumnTag.innerText;
        adresseColumn = adresseColumn.toUpperCase();
        input = input.toUpperCase();
        matchingTag = adresseColumn.search(input);
        if(matchingTag === -1){
            rowAdresses[rowSelect].classList.add('hidden');  
        }
        rowSelect += 1;
    });
}