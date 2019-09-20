<?php
    include("../layout/head.php");
?>
<body>
    <header>
        <h1><img src="/img/logoimmo.png" alt="Logo" height="75"> Deteil</h1>
    </header>
    <?php
        include("../layout/nav.php");
    ?>
    <main>
        <article>
            <h4>Immobilie</h4>
            <?php
                include("propertydetailview.php");
            ?>
        </article>
    </main>
    <?php
        include("../layout/footer.php");
    ?>
</body>