function renderTemplate(templateId, data){
    let template = document.getElementById(templateId).innerHTML;
    const properties = Object.keys(data);

    // Replace placeholders by input data
    properties.forEach(function(property){
        var regex = new RegExp('{{'+property+'}}','gi');
        template = template.replace(regex, data[property]);
    });

    // Find remaining placeholders
    regex = new RegExp('{{(.*)}}', 'gi');
    const matches = template.matchAll(regex);

    for (const match of matches) {
        console.error(`Placeholder "${match[0]}" in template "${templateId}" konnte nicht ersetzt werden`);
    }
       
    return template;
};
