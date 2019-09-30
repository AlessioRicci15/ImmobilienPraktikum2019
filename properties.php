<article>
    <h4>Immobilien  <a href="properties/create"><button type="button">Erfasse eine Immobilie</button></a></h4>
    <div></div>
    <!-- 
        1. via JavaScript do a xmlhttprequest (ajax-call) to get properties as json
        2. Find way from json (text) to javascript array
        3. loop over array, generate HTML
        4. inject HTML into view
    -->
    <?php
        include("property/propertytable.php");
    ?>            
</article>