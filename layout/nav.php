<nav>
    <ul>
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
        <a href="/stocks">
            <li <?php if($navigation == 'stocks'){?>class="active"<?php } ?>>
                <h3>Aktien</h3>
            </li>
        </a>
        <a href="/bonds">
            <li <?php if($navigation == 'bonds'){?>class="active"<?php } ?>>
                <h3>Anleihe</h3>
            </li>
        </a>
        <a href="/reits">
            <li <?php if($navigation == 'reits'){?>class="active"<?php } ?>>
                <h3>REITs</h3>
            </li>
        </a>
        <a href="/etfs">
            <li <?php if($navigation == 'etfs'){?>class="active"<?php } ?>>
                <h3>ETFs</h3>
            </li>
        </a>
        <a href="/impressum">
            <li <?php if($navigation == 'impressum'){?>class="active"<?php } ?>>
                <h3>Impressum</h3>
            </li>
        </a>
    </ul>
</nav>