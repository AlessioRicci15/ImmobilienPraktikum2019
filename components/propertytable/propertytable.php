<div class="property-table">
    <table border="1" class="allPropertiesTable js-sort-table">
        <thead>
            <tr>
                <th class="p1">Adresse</a></th>
                <th class="p2">Land</a></th>
                <th class="p3">Baujahr</a></th>
                <th class="p4">Preis</a></th>
                <th class="p5">Aktion</th>
            </tr>
        </thead>
    </table>
</div>

<script id="template-property-table" type="text/template">
    <tr id="rowID{{id}}">
        <td class="p1 lang">
            <a href="properties/show/{{id}}">{{Ort}}</a>
        </td>
        <td class="p2 lang">{{Landname}}</td>
        <td class="p3 lang">{{Baujahr}}</td>
        <td class="p4 lang">{{Preis}}</td>
        <td class="p5 lang">
            <a href="properties/show/{{id}}"><i class="fa fa-eye"></i>  Show</a>
            <br>
            <a href="properties/edit/{{id}}"><i class="fa fa-edit"></i> Edit</a>
            <br>
            <a onclick="deleteProperty({{id}})"><i class="fa fa-trash"></i> Remove</a>
        </td>
    </tr>
</script>