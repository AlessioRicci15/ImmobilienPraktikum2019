const formCreate = document.getElementById('formCreate');

if (formCreate) {
    formCreate.onsubmit = function (e) {
        e.preventDefault();

        const formNode = e.target;
        var formData = new FormData(formNode);
        
        let promise = fetch('/api/properties', {  
            method: 'POST',  
            body: formData
        });

        promise.then(() => {
            window.location.replace("/properties");
        });

        promise.catch(() => {
            console.error('something went wrong at creating a property');
        });
     };
}
