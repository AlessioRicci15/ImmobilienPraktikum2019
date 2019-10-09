document.getElementById('formEdit').onsubmit = function (e) {
    e.preventDefault();
    var Baujahredit = parseInt(document.getElementById('formbaujahredit').value, 10);
    var Preisedit = parseInt(document.getElementById('formpreisedit').value, 10);
    var Landedit = parseInt(document.getElementById('formlandedit').value, 10);
    fetch('/api/properties/'+idurl, {  
        method: 'PUT',  
        body: JSON.stringify({
            Ort: document.getElementById('formadresseedit').value,
            LandID: Landedit,
            Baujahr: Baujahredit,
            Preis: Preisedit
      })
    });
    setTimeout(() => {
        window.location.replace("/properties");
    }, 10);
 };