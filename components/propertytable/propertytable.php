<input type="text" id="serchinputadresse" onchange="searchAdresse()" onkeyup="searchAdresse()" onkeydown="searchAdresse()" onkeypress="searchAdresse()" placeholder=" Search for adresse..." >
<input type="text" id="serchinputcountry" onchange="searchCountry()" onkeyup="searchCountry()" onkeydown="searchCountry()" onkeypress="searchCountry()" placeholder=" Search for country..." ><div class="property-table">
    <table border="1" class="allPropertiesTable">
        <thead>
            <tr>
                <th class="p1">
                    Adresse <button class="notaknopf" onclick="sortTable('Ort', 'ASC', 'Adresse')">
                        <i id="iconArrowAdresse" class="arrow i-header"></i>
                    </button>
                </th>
                <th class="p2">
                    Land <button class="notaknopf" onclick="sortTable('Landname', 'ASC', 'Land')">
                        <i id="iconArrowLand" class="arrow i-header"></i>
                    </button>
                </th>
                <th class="p3">
                    Baujahr <button class="notaknopf" onclick="sortTable('Baujahr', 'DESC', 'Baujahr')">
                        <i id="iconArrowBaujahr" class="arrow i-header"></i>
                    </button>
                </th>
                <th class="p4">
                    Preis <button class="notaknopf" onclick="sortTable('Preis', 'DESC', 'Preis')">
                        <i id="iconArrowPreis" class="arrow i-header"></i>
                    </button>
                </th>
                <th class="p5">
                    Aktion</th>
            </tr>
        </thead>
        <tbody class="allPropertiesTableBody"></tbody>
    </table>
</div>