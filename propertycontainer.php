<?php
    include("head.php");
?>
<body>
    <header>
        <h1>Immobilien</h1>
    </header>
    <nav>
        <dl>
            <a href="index.php">
                <li>
                    <h3>Home</h3>
                </li>
            </a>
            <a href="propertycontainer.php">
                <li class="active">
                    <h3>Immobilien</h3>
                </li>
            </a>
            <a href="impressum.php">
                <li>
                    <h3>Impressum</h3>
                </li>
            </a>
        </dl>
    </nav>
    <main>
        <article>
            <h4>Immobilien <button type="button"><a href="creatpropertycontainer.php">Erfasse eine Immobilie</a></button> </h4>
            <?php
                include("propertytable.php");
            ?>            
        </article>
    </main>
    <?php
        include("footer.php");
    ?>
</body>