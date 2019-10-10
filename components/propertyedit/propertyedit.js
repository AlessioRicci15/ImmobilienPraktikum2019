const formEdit = document.getElementById('formEdit');

if (formEdit) {
    formEdit.onsubmit = function (e) {
        e.preventDefault();

        const formNode = e.target;
        var formData = new FormData(formNode);

        Ortedit = formData.get('Ort');
        Landedit = parseInt(formData.get('LandID'));
        Baujahredit = parseInt(formData.get('Baujahr'));
        Preisedit = parseInt(formData.get('Preis'));
        
        let promise = fetch('/api/properties/'+idurl, {  
            method: 'PUT',  
            body: JSON.stringify({
                Ort: Ortedit,
                LandID: Landedit,
                Baujahr: Baujahredit,
                Preis: Preisedit
          })
        });

        promise.then(() => {
            window.location.replace("/properties");
        });

        promise.catch(() => {
            console.error('something went wrong at creating a property');
        });
     };
}