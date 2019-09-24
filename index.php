<?php

    include("layout/head.php");

    $url = $_SERVER['REQUEST_URI']; 
    $url_parts = explode('/', $url);

    $view = $url_parts[1]; 
    $function = array_key_exists('2', $url_parts) ? $url_parts[2] : '';
    $id = array_key_exists('3', $url_parts) ? intval($url_parts[3]) : -1; 

    switch ($view):
        case 'impressum':
            $pageTitle = 'Impressum';
            $navigation = 'impressum';
            $view = 'impressum.php';
            break;
        case '':
            $pageTitle = 'Home';
            $navigation = 'home';
            $view = 'home.php';
            break;
        case 'home':
            $pageTitle = 'Home';
            $navigation = 'home';
            $view = 'home.php';
            break;
        case 'index':
            $pageTitle = 'Home';
            $navigation = 'home';
            $view = 'home.php';
            break;
        case 'immobilien':
            $pageTitle = 'Properties';
            $navigation = 'properties';
            $view = 'properties.php';
            break;
        case 'properties':
            switch ($function) {
                case '':
                    $pageTitle = 'Properties';
                    $navigation = 'properties';
                    $view = 'properties.php';
                    break;
                case 'show':
                    $pageTitle = 'Property';
                    $navigation = '';
                    $view = 'property/show.php';
                    break;
                case 'edit':
                    $pageTitle = 'Edit property';
                    $navigation = '';
                    $view = 'property/edit.php';
                    break;
                case 'sendeditpropertyformular':
                    $pageTitle = 'Property changed';
                    $navigation = '';
                    $view = 'property/sendeditpropertyformular.php';
                    break;
                case 'remove':
                    $pageTitle = 'Remove property';
                    $navigation = '';
                    $view = 'property/remove.php';
                    break;
                case 'creat':
                    $pageTitle = 'Creat property';
                    $navigation = '';
                    $view = 'property/creat.php';
                    break;
                case 'sendcreatpropertyformular':
                    $pageTitle = 'Property created';
                    $navigation = '';
                    $view = 'property/sendcreatpropertyformular.php';
                    break;
                default:
                    $pageTitle = '404';
                    $navigation = '';
                    $view = '404.php';
                    break;
            };
            break;
        default:
            $pageTitle = '404';
            $navigation = '';
            $view = '404.php';
            break;
    endswitch;        
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