<?php
    include("layout/head.php");
?>
<body>
    <header>
        <h1>Immobilien</h1>
    </header>
    <nav>
        <dl>
            <a href="index">
                <li>
                    <h3>Home</h3>
                </li>
            </a>
            <a href="propertycontainer">
                <li class="active">
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
            <h4>Immobilien<a href="property/creatpropertycontainer"><button type="button">Erfasse eine Immobilie</button></a></h4>
            <?php
                include("property/propertytable.php");
            ?>            
        </article>
    </main>
    <?php
        include("layout/footer.php");
    ?>
</body>