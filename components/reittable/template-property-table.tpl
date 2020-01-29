<tr id="rowID{{id}}">
    <td class="p1 lang" id="adresseColumn">
        <a href="properties/show/{{id}}">{{Ort}}</a>
    </td>
    <td class="p2 lang" id="countryColumn">{{Landname}}</td>
    <td id="noBaujahr{{id}}" class="p3 lang">{{Baujahr}}</td>
    <td id="currency{{id}}" class="p4 lang">{{Preis}}</td>
    <td class="p5 lang">
        <a href="properties/show/{{id}}"><i class="fa fa-eye"></i>  Show</a>
        <br>
        <a href="properties/edit/{{id}}"><i class="fa fa-edit"></i> Edit</a>
        <br>
        <a onclick="deleteProperty({{id}})"><i class="fa fa-trash"></i> Remove</a>
    </td>
</tr>