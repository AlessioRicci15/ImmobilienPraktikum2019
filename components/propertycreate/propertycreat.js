document.getElementById('formCreate').onsubmit = function (e) {
    e.preventDefault();
    var Baujahrcreat = parseInt(document.getElementById('formbaujahrcreat').value, 10);
    var Preiscreat = parseInt(document.getElementById('formpreiscreat').value, 10);
    var Landcreat = parseInt(document.getElementById('formlandcreat').value, 10);
    fetch('/api/properties', {  
        method: 'POST',  
        body: JSON.stringify({
            Ort: document.getElementById('formadressecreat').value,
            LandID: Landcreat,
            Baujahr: Baujahrcreat,
            Preis: Preiscreat
      })
    }); 
    setTimeout(() => {
        window.location.replace("/properties");
    }, 10); 
 };