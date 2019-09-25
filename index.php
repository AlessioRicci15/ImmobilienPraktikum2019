<?php
    include("layout/head.php");
    include("sql/databaseconnaction.php");
    
    $url = $_SERVER['REQUEST_URI']; 
    $url_parts = explode('/', $url);

    $view = $url_parts[1]; 
    $function = array_key_exists('2', $url_parts) ? $url_parts[2] : '';
    $id = array_key_exists('3', $url_parts) ? intval($url_parts[3]) : -1; 

    include("switchcase.php");        
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