<?php
    include("layout/head.php");
?>
<body>
    <header>
        <h1><img src="/img/logoimmo.png" alt="Logo" height="75"> Impressum</h1>
    </header>
    <nav>
        <dl>
            <a href="index">
                <li>
                    <h3>Home</h3>
                </li>
            </a>
            <a href="propertycontainer">
                <li>
                    <h3>Immobilien</h3>
                </li>
            </a>
            <a href="impressum">
                <li class="active">
                    <h3>Impressum</h3>
                </li>
            </a>
        </dl>
    </nav>
    <main>
        <article>
            <h4>Das bin ich!</h4>
            Alessio Ricci<br>
            IMS-Schüler an der KSB<br>
            alessio.ricci@ksb-sg.ch<br>
            079 565 26 66
        </article>
    </main>
    <?php
        include("layout/footer.php");
    ?>
</body>