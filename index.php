<?php
    include("layout/head.php");
?>
<body>
    <header>
        <h1><img src="/img/logoimmo.png" alt="Logo" height="75"> Home</h1>
    </header>
    <nav>
        <dl>
        <a href="index">
            <li class="active">
                <h3>Home</h3>
            </li>
        </a>
        <a href="propertycontainer">
            <li>
                <h3>Immobilien</h3>
            </li>
        </a>
        <a href="impressum">
            <li>
                <h3>Impressum</h3>
            </li>
        </a>
        </dl>
    </nav>
    <main>
        <article>
            <h4>Wilkommen</h4>
            Dies ist mein Projekt für das Kurzzeitpraktikum bei Fronify.<br>
            Hier verbringe ich vier Wochen im Herbs um einen Einblick in das Berufsleben zu erhalten.
        </article>
    </main>
    <?php
        include("layout/footer.php");
    ?>
</body>