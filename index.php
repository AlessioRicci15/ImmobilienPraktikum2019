<?php
    include("router.php");   
    include("layout/head.php");
    include("sql/databaseconnaction.php");
    include("model/Property.php");
    include("model/Country.php");
?>
<body>
    <header>
        <a href="/">
            <img src="/img/logo.png" alt="Logo" class="logo">
        </a>   
        <h1 style="margin-top: 34.8;"><?php echo $pageTitle; ?></h1>
    </header>
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
    <main>
        <?php include($view);?>
    </main>
    <?php
        include("layout/footer.php");
    ?>
</body>