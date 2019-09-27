<nav>
    <dl>
    <a href="/home">
        <li <?php if($navigation == 'home'){?>class="active"<?php } ?>>
            <h3>Home</h3>
        </li>
    </a>
    <a href="/properties">
        <li <?php if($navigation == 'properties'){?>class="active"<?php } ?>>
            <h3>Immobilien</h3>
        </li>
    </a>
    <a href="/impressum">
        <li <?php if($navigation == 'impressum'){?>class="active"<?php } ?>>
            <h3>Impressum</h3>
        </li>
    </a>
    </dl>
</nav>